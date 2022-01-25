<?php
session_start();

//define the root path of the project
chdir(__DIR__);
define('ROOT_DIR', realpath('../'));
define('APP_PATH', realpath(ROOT_DIR . '/app'));


//get the requested route
$route = $_SERVER['REQUEST_URI'];
$method = strtolower($_SERVER['REQUEST_METHOD']);


// Autoload Classes Booter
require realpath(ROOT_DIR . '/Booter.php');

// Run the App
$app = new Pulse\Pulse();

$app->init($route, $method);
$app->run();
