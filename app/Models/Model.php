<?php

namespace App\Models;

use App\Core\Database\Connection;
use App\Core\Database\PersistDB;


abstract class Model
{

    use PersistDB;
    protected $table;

    /** @var \App\Core\Database\Connection */
    protected $db;

    public function __construct()
    {
        $this->db = new Connection();
    }

    /**
     * Método padrão para buscar todos os dados
     *
     * @return void
     */
    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        $prepare = $this->db->connection()->prepare($query);
        $prepare->execute();
        return $prepare->fetchAll();
    }

    /**
     * Método padrão para buscar um dado
     *
     * @param string $field
     * @param string|int $value
     * @return void
     */
    public function find($field, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$field} = :field";
        $prepare = $this->db->connection()->prepare($query);
        $prepare->bindValue(':field', $value);
        $prepare->execute();
        return $prepare->fetch();
    }


    /**
     * Método padrão para salvar um dado
     *
     * @param array $data
     * @return void
     */
    public function save($data)
    {
        $query = PersistDB::insert($this->table, $data);
        $prepare = $this->db->connection()->prepare($query);
        return $prepare->execute($data);
    }


    /**
     * Método padrão para atualizar um dado
     *
     * @param array $where
     * @param array $data
     * @return void
     */
    public function update($where, $data)
    {
        $query = PersistDB::edit($this->table, $where, $data);
        $prepare = $this->db->connection()->prepare($query);
        return $prepare->execute($data);
    }

    public function delete($field, $value)
    {
        $query = "DELETE FROM {$this->table} WHERE {$field} = :field";
        $prepare = $this->db->connection()->prepare($query);
        $prepare->bindValue(':field', $value);
        return $prepare->execute();
    }
}
