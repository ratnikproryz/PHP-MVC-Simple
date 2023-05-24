<?php

use App\Controllers\DepartmentController;

require __DIR__ . '/vendor/autoload.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        $action = 'index';
    }
}
$controller = new DepartmentController();
$controller->route($action);
