<?php

require ROOT_DIR . "/vendor/autoload.php";
require ROOT_DIR . "/ENV.php";

spl_autoload_register(function ($className) {

    $className = "/" . $className . '.php';
    $className = str_replace('\\', '/', $className);

    $classes = [
        "App" =>  'app',
        "System" => 'system',
    ];
    $root = ROOT_DIR . DIRECTORY_SEPARATOR;

    foreach ($classes as $class => $path) {
        $pattern = "/^\/${class}/i";

        if (preg_match($pattern, $className)) {
            $className = preg_replace($pattern, $root . $path, $className);
            break;
        }
    }

    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $className);
    require $path;
});

// Disable Default Errors View
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
