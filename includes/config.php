<?php

define(maxmind_db_path,'/var/www/powerfeeds/includes/GeoLite2-Country.mmdb');
define('CDN', "http://$_SERVER[HTTP_HOST]/images/");
define('SITE', "http://$_SERVER[HTTP_HOST]/");
define('DIMENSION', '560x292');

define("URL", "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");