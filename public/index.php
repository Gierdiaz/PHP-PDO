<?php

use app\classes\Route;
use app\classes\Uri;

require "../bootstrap.php";

$route = [
    '/' => 'controllers/index.php',
];

$uri = Uri::loadUri();

require Route::loadRoute($route, $uri);