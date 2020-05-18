<?php

require __DIR__ . '/bootstrap/app.php';

use App\Core\Router\Route;
use App\Core\Templates\Layout;
use App\Core\Router\Uri;

$layout = new Layout();

$links = [
    '/' => 'login/view_login'
];

$uri = Uri::loadUri();

$router = Route::loadRouter($uri, $links);

require $router;
require $layout->master('templates/login/index');