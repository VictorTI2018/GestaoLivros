<?php

namespace App\Core\Router;

class Route
{

    /**
     * Carregar Rotas
     *
     * @param string $uri
     * @param array $router
     * @return void
     */
    public static function loadRouter($uri, $router)
    {
        if (!array_key_exists($uri, $router)) {
            return false;
        }

        return "app/Controllers/{$router[$uri]}.php";
    }
}
