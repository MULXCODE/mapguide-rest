<?php

//
//  Copyright (C) 2014 by Jackie Ng
//
//  This library is free software; you can redistribute it and/or
//  modify it under the terms of version 2.1 of the GNU Lesser
//  General Public License as published by the Free Software Foundation.
//
//  This library is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
//  Lesser General Public License for more details.
//
//  You should have received a copy of the GNU Lesser General Public
//  License along with this library; if not, write to the Free Software
//  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

// These are helper routes to help play nice with the Swagger UI
//
// API Docs are regenerated by issuing the following command:
// php vendor\zircote\swagger-php\bin\swagger "%CD%\app\routes" -o "%CD%\doc" --default-base-path http://localhost/mapguide/rest
//
// TODO: Perhaps we should try to dynamically build this at runtime so that the base path can be inferred instead of specified up-front or we find a way to rewrite this at runtime
// TODO: If dynamically building, it should save the build output to cache where permissions are assumed to be properly set up

require_once dirname(__FILE__)."/../../version.php";
require_once dirname(__FILE__)."/../../util/utils.php";

$app->get("/apidoc/", function() use ($app) {
    $prefix = MgUtils::GetApiVersionNamespace($app, "/apidoc");
    $path = $app->config("AppRootDir")."/doc/data/swagger.json";
    
    $data = null;
    if (strlen($prefix) > 0) {
        $doc = json_decode(file_get_contents($path));
        $doc->basePath .= "/".$prefix;
        $data = json_encode($doc);
    } else {
        $data = file_get_contents($path);
    }
    
    $app->response->header("Content-Type", "application/json");
    $app->response->setBody($data);
    /*
    //HACK: swagger-php doesn't seem to support annotations for describing the API
    //So we'll intercept the api-docs.json request via this route to inject that
    //information
    $doc = json_decode(file_get_contents($path));
    $doc->apiVersion = MG_REST_API_VERSION;
    $doc->swaggerVersion = SWAGGER_API_VERSION;
    $doc->info = new stdClass();
    
    $doc->info->title = "mapguide-rest";
    $doc->info->description = $app->localizer->getText("L_ABOUT_MAPGUIDE_REST");
    $doc->info->license = "LGPL 2.1";
    $doc->info->licenseUrl = "https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html";
    
    //Scrub out the .json extensions
    foreach ($doc->apis as $api) {
        $api->path = str_replace(".json", "", $api->path);
    }
    $data = json_encode($doc);
    $app->response->header("Content-Type", "application/json");
    $app->response->setBody($data);
    */
});
$app->get("/doc/index.html", function() use ($app) {
    $prefix = MgUtils::GetApiVersionNamespace($app, "/doc/index.html");
    if (strlen($prefix) > 0)
        $docUrl = $app->config("SelfUrl")."/$prefix/apidoc";
    else
        $docUrl = $app->config("SelfUrl")."/apidoc";
    $assetUrlRoot = $app->config("SelfUrl")."/doc";
    $docTpl = $app->config("AppRootDir")."/assets/doc/viewer.tpl";

    $smarty = new Smarty();
    $smarty->setCompileDir($app->config("Cache.RootDir")."/templates_c");
    $smarty->assign("title", $app->localizer->getText("L_PRODUCT_API_REFERENCE", "mapguide-rest"));
    $smarty->assign("docUrl", $docUrl);
    $smarty->assign("docAssetRoot", $assetUrlRoot);

    $output = $smarty->fetch($docTpl);
    $app->response->header("Content-Type", "text/html");
    $app->response->setBody($output);
});
$app->get("/apidoc/:file", function($file) use ($app) {
    if (MgUtils::StringEndsWith($file, ".json"))
        $file = str_replace(".json", "", $file);

    $prefix = MgUtils::GetApiVersionNamespace($app, "/apidoc");
    if (strlen($prefix) > 0) {
        $path = $app->config("AppRootDir")."/doc/data/$prefix/$file.json";
    } else {
        $path = $app->config("AppRootDir")."/doc/data/$file.json";
    }

    $doc = json_decode(file_get_contents($path));
    if (strlen($prefix) > 0) {
        $doc->basePath = $app->config("SelfUrl")."/$prefix";
    } else {
        $doc->basePath = $app->config("SelfUrl");
    }
    $doc->swaggerVersion = SWAGGER_API_VERSION;
    $doc->apiVersion = MG_REST_API_VERSION;

    $app->response->header("Content-Type", "application/json");
    $app->response->setBody(json_encode($doc));
});