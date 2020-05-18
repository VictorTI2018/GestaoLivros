<?php

namespace App\Core\Database;

trait PersistDB
{

    //Custom Métodos

    /**
     * Método helper para criar uma query de insert
     *
     * @param string $table
     * @param array|object $data
     * @return void
     */
    public static function insert($table, $data)
    {
        $query = "INSERT INTO {$table}(";
        $query .= implode(',', array_keys($data)) . ")VALUES(";
        $query .= ":" . implode(", :", array_keys($data)) . ')';

        return $query;
    }

    /**
     * Método helpers para criar uma query de update
     *
     * @param string $table
     * @param array $where
     * @param array $data
     * @return void
     */
    public static function edit($table, $where, $data)
    {
        unset($data[array_keys($where)[0]]);
        $query = "UPDATE {$table} SET ";
        foreach ($data as $key => $value) {
            $query .= "{$key} = :{$key}, ";
        }
        $query = rtrim($query, ', ');
        $whereKeys = array_keys($where);
        $query .= " WHERE {$whereKeys[0]} = :{$whereKeys[0]}";
        return $query;
    }
}
