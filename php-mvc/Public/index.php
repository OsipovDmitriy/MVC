<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'on');

define('APPLICATION_PATH', realpath(__DIR__ . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . 'App'));

require_once "../autoloader.php";

$fc_factory = new \MVC\FrontController\FrontControllerFactory();

$front_controller = $fc_factory->create();

$front_controller->run();