<?php
    require_once 'controllers/Controller.php';
    $action = filter_input(INPUT_POST, 'action');
    if ($action == null) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == null) {
            $action = 'index';
        }
    }
    $controller = new Controller();
    $controller->route($action);


