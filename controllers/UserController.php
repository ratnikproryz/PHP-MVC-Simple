<?php
class UserController
{

    private $connection;

    public function __construct()
    {
        require_once __DIR__ . '/../DAO.php';
        require_once __DIR__ . '/../models/User.php';
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
        $userModel = new User($this->connection);
        $users = $userModel->getAll();
        $this->view('home', ['users' => $users]);
    }

    public function create()
    {
        $this->view('create');
    }

    public function store()
    {
        $userModel = new User($this->connection);
        $userModel->setName($_POST['name']);
        $userModel->setEmail($_POST['email']);
        $userModel->setPhone($_POST['phone']);
        $userModel->save();
        header('Location: index.php');
    }

    public function delete()
    {
        $id= $_GET['id'];
        $userModel = new User($this->connection);
        $userModel->remove($id);
        header('Location: index.php');
    }

    public function view($view, $data = null)
    {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
