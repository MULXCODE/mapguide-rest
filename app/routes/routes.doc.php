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

require_once dirname(__FILE__)."/../version.php";
require_once dirname(__FILE__)."/../util/utils.php";

$app->get("/apidoc/", function() use ($app) {
    $path = $app->config("AppRootDir")."/doc/data/api-docs.json";

    //HACK: swagger-php doesn't seem to support annotations for describing the API
    //So we'll intercept the api-docs.json request via this route to inject that
    //information
    $doc = json_decode(file_get_contents($path));
    $doc->apiVersion = MG_REST_API_VERSION;
    $doc->swaggerVersion = SWAGGER_API_VERSION;
    $doc->info = new stdClass();
    //TODO: Localize
    $doc->info->title = "mapguide-rest";
    $doc->info->description = "mapguide-rest is a RESTful web extension for MapGuide Open Source and Autodesk Infrastructure Map Server.<br/><br/><strong>NOTE:</strong> Basic HTTP authentication credentials will generally be cached by the web browser for a short period should you choose to use this method instead of passing in session ids";
    $doc->info->license = "LGPL 2.1";
    $doc->info->licenseUrl = "https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html";
    
    //Scrub out the .json extensions
    foreach ($doc->apis as $api) {
        $api->path = str_replace(".json", "", $api->path);
    }

    $app->response->header("Content-Type", "application/json");
    $app->response->setBody(json_encode($doc));
});
$app->get("/doc/index.html", function() use ($app) {
    $docUrl = $app->config("SelfUrl")."/apidoc";
    $assetUrlRoot = $app->config("SelfUrl")."/doc";
    $docTpl = $app->config("AppRootDir")."/assets/doc/viewer.tpl";

    $smarty = new Smarty();
    $smarty->setCompileDir($app->config("Cache.RootDir")."/templates_c");
    $smarty->assign("title", "mapguide-rest API Reference"); //TODO: Localize
    $smarty->assign("docUrl", $docUrl);
    $smarty->assign("docAssetRoot", $assetUrlRoot);

    $output = $smarty->fetch($docTpl);
    $app->response->header("Content-Type", "text/html");
    $app->response->setBody($output);
});
$app->get("/apidoc/:file", function($file) use ($app) {
    if (MgUtils::StringEndsWith($file, ".json"))
        $file = str_replace(".json", "", $file);

    $path = $app->config("AppRootDir")."/doc/data/$file.json";

    //HACK/TODO: Overwrite whatever basepath we get from the JSON with the self-URL to index.php
    //There should be something in $app that lets us do this.
    $doc = json_decode(file_get_contents($path));
    $doc->basePath = $app->config("SelfUrl");
    $doc->swaggerVersion = SWAGGER_API_VERSION;
    $doc->apiVersion = MG_REST_API_VERSION;

    $app->response->header("Content-Type", "application/json");
    $app->response->setBody(json_encode($doc));
});

?>