<?php
class Model
{
    private $id, $name, $phone, $email;
    private $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $statement = $this->connection->prepare("SELECT mahocphan, tenhocphan,
         sotinchi, hocphan.makhoa, tenkhoa from hocphan
        INNER JOIN khoa 
        on hocphan.makhoa =  khoa.makhoa");
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
        $statement = $this->connection->prepare("DELETE FROM hocphan where mahocphan=:id");
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
