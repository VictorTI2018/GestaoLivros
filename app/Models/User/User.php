<?php


namespace App\Models\User;

use App\Models\Model;

class User extends Model
{

    protected $table = 'users';

    protected $columns = ['username', 'password'];

    public function applyFilter($term)
    {
        $query = "SELECT * FROM {$this->table} WHERE id LIKE :id OR username LIKE :username";
        $prepare = $this->db->connection()->prepare($query);
        $prepare->bindValue(':id', '%' . $term . '%');
        $prepare->bindValue(':username', '%' . $term . '%');
        $prepare->execute();
        return $prepare->fetchAll();
    }
}
