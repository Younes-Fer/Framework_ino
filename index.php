<?php

require 'vendor/autoload.php';
/**
 * Method to rin application
 */
require 'bootstrap/App.php';

use Bootstrap\Application;

Application::run();
/*
use Config\App;
$app = new App();
$url = $_GET['path'] ?? 'Home';
$app->getController($url);

var_dump($_SERVER);
*/