<?php

namespace App\Models;

class User
{
    private $id, $name, $phone, $email;
    private $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $statement = $this->connection->prepare("SELECT id, name, email, phone FROM users");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function save()
    {
        $statement = $this->connection
            ->prepare("INSERT INTO users (name, email, phone) VALUES(:name, :email, :phone)");
        return $statement->execute([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone
        ]);
    }

    public function remove($id)
    {
        $statement = $this->connection->prepare("DELETE FROM users where id=:id");
        return $statement->execute(['id' => $id]);
    }

    public function getId()
    {
        return $this->id;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
