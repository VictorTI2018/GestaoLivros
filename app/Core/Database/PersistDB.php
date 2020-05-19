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
    public static function insert($table, $columns)
    {
        $query = "INSERT INTO {$table}(";
        $query .= implode(',', $columns) . ")VALUES(";
        $query .= ":" . implode(", :", $columns) . ')';

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
    public static function edit($table, $where, $columns)
    {
       
        $query = "UPDATE {$table} SET ";
        foreach ($columns as $key => $value) {
            $query .= "{$value} = :{$value}, ";
        }
        $query = rtrim($query, ', ');
        $whereKeys = array_keys($where);
        $query .= " WHERE {$whereKeys[0]} = :{$whereKeys[0]}";
        return $query;
    }
}
