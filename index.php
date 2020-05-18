<?php

require __DIR__ . '/bootstrap/app.php';

use App\Core\Router\Route;
use App\Core\Templates\Layout;
use App\Core\Router\Uri;

$layout = new Layout();

$links = [];


if (!isset($_SESSION['USER'])) {
    $links = [
        '/' => 'login/view_login'
    ];

    $master = $layout->master('templates/login/index');
} else {
    $links = [
        '/' => 'dashboard/view_dashboard'
    ];
    $master = $layout->master('templates/sistema/index');
}

$uri = Uri::loadUri();
$router = Route::loadRouter($uri, $links);

require $router;
require $master;
