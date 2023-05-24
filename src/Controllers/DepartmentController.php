<?php

namespace App\Controllers;

use App\Repositories\DepartmentRepository;

class DepartmentController
{
    private $departmentRepository;

    public function __construct()
    {
        $this->departmentRepository = new DepartmentRepository();
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
        $departments = $this->departmentRepository->getAll();
        $this->view('home', ['departments' => $departments]);
    }

    public function create()
    {
        $this->view('create');
    }

    public function store()
    {
        $this->departmentRepository->store();
        header('Location: index.php');
    }

    public function delete()
    {
        $this->departmentRepository->delete();
        header('Location: index.php');
    }

    public function view($view, $data = null)
    {
        require_once './views/' . $view . '.php';
    }
}
