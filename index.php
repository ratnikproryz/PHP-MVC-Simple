<?php
    require_once 'controllers/UserController.php';
    $action = filter_input(INPUT_POST, 'action');
    if ($action == null) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == null) {
            $action = 'index';
        }
    }
    $userController = new UserController();
    $userController->route($action);


