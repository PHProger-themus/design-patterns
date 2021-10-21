<?php

namespace classes;

use PDO;

class DB
{

    public $host, $username, $password, $database;
    protected PDO $db;

    public function connect() : void
    {
        $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8";
        $this->db = new PDO($dsn, $this->username, $this->password);
    }

    public function getDriverInfo() : array
    {
        return [
            'host' => $this->host,
            'username' => $this->username,
            'password' => $this->password,
            'database' => $this->database
        ];
    }

}