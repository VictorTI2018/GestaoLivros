<?php

namespace App\Core\Templates;

class Layout
{

    private $view;

    /**
     * Adicionar uma Página
     *
     * @param string $view
     * @return void
     */
    public function add($view)
    {
        $this->view = $view;
    }


    /**
     * Carregar uma Página
     *
     * @return void
     */
    public function load()
    {
        return "public/views/{$this->view}.php";
    }

    /**
     * Carregar Páginas Master
     *
     * @param string $master
     * @return void
     */
    public function master($master)
    {
        return "public/{$master}.php";
    }
}
