<?php
class DAO
{
    private $dsn, $user, $password;
    private $connection;
    public function __construct()
    {
        try {
            $this->dsn='mysql:dbname=multichoice_exam;host=localhost';
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
