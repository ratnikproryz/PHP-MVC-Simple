<?php
namespace App\Models;

class User
{
    private $makhoa, $tenkhoa;
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
            ->prepare("INSERT INTO khoa (makhoa, tenkhoa) VALUES(:makhoa, :tenkhoa)");
        return $statement->execute([
            "makhoa" => $this->makhoa,
            "tenkhoa" => $this->tenkhoa,
        ]);
    }

    public function remove($id)
    {
        $statement = $this->connection->prepare("DELETE FROM hocphan where mahocphan=:id");
        return $statement->execute(['mahocphan' => $id]);
    }

    public function getMaKhoa()
    {
        return $this->makhoa;
    }
    public function setMaKhoa($makhoa)
    {
        $this->makhoa = $makhoa;
    }
    public function getTenKhoa()
    {
        return $this->tenkhoa;
    }
    public function setTenKhoa($tenkhoa)
    {
        $this->tenkhoa = $tenkhoa;
    }
}
