<?php

namespace DB;

use PDO;
use PDOException;
use Exception;

class DAO
{
    private $dsn, $user, $password;
    private $connection;
    public function __construct()
    {
        try {
            $this->dsn='mysql:dbname=exame;host=localhost';
            $this->user = "root";
            $this->password = "";
            $this->connection = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            throw new  Exception($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
