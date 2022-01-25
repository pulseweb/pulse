<?php

namespace App\Config;

use Pulse\Router\Route;

//set main data
Route::setDefaultNamespace("App\Controllers");

Route::get('/', 'Home');
