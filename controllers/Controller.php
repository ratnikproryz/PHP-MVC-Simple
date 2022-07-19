<?php
class Controller
{

    private $connection;

    public function __construct()
    {
        require_once __DIR__ . '/../DAO.php';
        require_once __DIR__ . '/../models/Model.php';
        $dao = new DAO();
        $this->connection = $dao->getConnection();
    }
    public function route($action)
    {
        switch ($action) {
            case 'index':
                $this->index();
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
        $model = new Model($this->connection);
        $courses = $model->getAll();
        $this->view('home', ['courses' => $courses]);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $model = new Model($this->connection);
        $model->remove($id);
        header('Location: index.php');
    }

    public function view($view, $data = null)
    {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
