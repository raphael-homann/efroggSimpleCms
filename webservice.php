<?php

use efrogg\Simplecms\Webservice\Provider\WebserviceCmsProvider;
use efrogg\Webservice\Authenticator\SimpleAuthenticator;
use efrogg\Webservice\WebserviceBootstrap;


$autoloader = require "vendor/autoload.php";

$options = array("allow_debug"=>true);

$bootstrap = new WebserviceBootstrap($options);
$bootstrap->setAuthenticator(new SimpleAuthenticator("9D22NNDJ721JHMMGECKRPTMHHKPGHPPV"));
$bootstrap->addProvider("/api",new WebserviceCmsProvider($bootstrap->getApp()));
//$bootstrap->setDb(new PrestashopDbAdapter(\Db::getInstance()));

$bootstrap->run();