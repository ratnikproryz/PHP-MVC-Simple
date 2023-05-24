<?php

namespace App\Controllers;

use App\Models\Department;
use App\DAO;

class DepartmentController
{
    private $connection;

    public function __construct()
    {
        $dao = new DAO();
        $this->connection = $dao->getConnection();
    }
    public function route($action)
    {
        switch ($action) {
            case 'index':
                $this->index();
                break;
            case 'create':
                $this->create();
                break;
            case 'store':
                $this->store();
                break;
            case 'delete':
                $this->delete();
                break;
            default:
                $this->index();
        }
    }

    public function index()
    {
        $model = new Department($this->connection);
        $courses = $model->getAll();
        $this->view('home', ['courses' => $courses]);
    }

    public function create()
    {
        $this->view('create');
    }

    public function store()
    {
        $userModel = new Department($this->connection);
        $userModel->setMaKhoa($_POST['makhoa']);
        $userModel->setTenKhoa($_POST['tenkhoa']);
        $userModel->save();
        header('Location: index.php');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $model = new Department($this->connection);
        $model->remove($id);
        header('Location: index.php');
    }

    public function view($view, $data = null)
    {
        require_once './views/' . $view . '.php';
    }
}
