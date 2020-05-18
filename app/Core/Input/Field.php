<?php

namespace App\Core\Input;

class Field
{

    private $fields = [];

    /**
     * Undocumented function
     *
     * @param array $fields
     * @return void
     */
    public function request($fields)
    {
        foreach ($fields as $key => $value) {
            $this->fields[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
        return $this->fields;
    }
}
