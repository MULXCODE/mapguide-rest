mapguide-rest
=============

mapguide-rest is a RESTful web extension for [MapGuide Open Source](http://mapguide.osgeo.org) that continues the ideas explored in [mapguide4j](https://github.com/jumpinjackie/mapguide4j) and [GeoREST](https://code.google.com/p/georest/) projects

mapguide-rest provides the following services:

 - A REST-ful http interface modeled on original discussions on a [RESTful web service for MapGuide](http://trac.osgeo.org/mapguide/wiki/Future/RESTfulWebServices)
 - A re-imagining of GeoREST and its data publishing capabilities

mapguide-rest is written in PHP and uses the following libraries:

 - [Slim Framework](http://www.slimframework.com/)
 - [Smarty Template Engine](http://www.smarty.net)

Requirements
============

mapguide-rest requires an installation of MapGuide Open Source and its bundled copy of PHP. As PHP is required by Fusion and other installed MapGuide web applications, this requirement will almost always be satisifed.

mapguide-rest has been tested on MapGuide Open Source 2.5 (latest stable release is 2.5.2). It should theoretically work on any installation of MapGuide Open Source or AIMS that includes PHP 5.3 or newer.

Setup
=====

 1. Clone this repository into the www directory of your MapGuide Open Source installation. Rename the clone directory to "rest" (eg. C:\Program Files\OSGeo\MapGuide\Web\www\rest on windows or /usr/local/mapguideopensource-2.5.2/webserverextensions/www/rest on linux)

 2. [OPTIONAL] Install and enable the [Application Request Routing module for IIS](http://www.iis.net/downloads/microsoft/application-request-routing). This allows for "cleaner" URLs. If you have installed the ARR module, you can rename the web.config.iis file to web.config to activate ARR for the REST extension. For Apache, you can use the provided .htaccess file for clean URLs and skip this step.

 3. You can now access the REST endpoint at:
 
  - http://yourservername:port/mapguide/rest
  - http://yourservername:port/mapguide/rest/index.php (if you don't have ARR installed for IIS or mod_rewrite enabled for Apache)

Documentation
=============

Check out the [wiki](https://github.com/jumpinjackie/mapguide-rest/wiki) for additional information and documentation.

License
=======

mapguide-rest is licensed under the GNU Lesser General Public License (LGPL) v2.1 (see LICENSE for more information)
