<?php

namespace App\Repositories;

use App\Models\Department;
use App\DAO;

class DepartmentRepository
{
    private $connection;

    public function __construct()
    {
        $dao = new DAO();
        $this->connection = $dao->getConnection();
    }

    public function getAll()
    {
        $model = new Department($this->connection);
        return $model->getAll();
    }

    public function store()
    {
        $userModel = new Department($this->connection);
        $userModel->setMaKhoa($_POST['makhoa']);
        $userModel->setTenKhoa($_POST['tenkhoa']);
        $userModel->save();
    }

    public function delete()
    {
        $id = $_GET['id'];
        $model = new Department($this->connection);
        $model->remove($id);
    }
}
