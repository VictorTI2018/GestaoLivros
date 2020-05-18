<?php

namespace App\Core\Database;

use App\Core\Configuration;
use PDO;

class Connection extends Configuration
{

    private $host, $user, $pass, $dbname, $driver, $charset;

    public function __construct()
    {
        $this->host = self::DB_HOST;
        $this->user = self::DB_USER;
        $this->pass = self::DB_PASS;
        $this->dbname = self::DB_NAME;
        $this->driver = self::DB_DRIVER;
        $this->charset = self::DB_CHARSET;
    }

    /**
     * Iniciar a conexao com o banco de dados
     *
     * @return void
     */
    public function connection()
    {
        $pdo = new PDO("{$this->driver}:host={$this->host};
        dbname={$this->dbname};charset={$this->charset}", $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        /** @var PDO */
        return $pdo;
    }
}
