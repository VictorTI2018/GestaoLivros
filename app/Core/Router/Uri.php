<?php

namespace App\Core\Router;


class Uri
{
    /**
     * Carregar uri
     *
     * @return void
     */
    public static function loadUri()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
