<?php

namespace App\Core\Templates;

class EmailTemplate
{

    public function view(array $data)
    {
        $html = "
            <div style='height: auto; border-bottom: 1px solid #000; border-top: 1px solid #000;'>
                <p style='font-size: 1rem;'>Cliente: <strong>".$data['nome']."</strong></p>
                <p style='font-size: 1rem;'>E-mail: <strong>".$data['email']."</strong></p>
                <p style='font-size: 1rem;'>Celular: <strong>".$data['celular']."</strong></p>
                <p style='font-size: 1rem;'>Telefone: <strong>".$data['telefone']."</strong></p>
            </div>
        ";
        return $html;
    }
}
