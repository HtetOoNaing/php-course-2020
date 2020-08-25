<?php
include 'model/Model.php';
$model = new Model();
// $result = $model->executeQuery('select * from users');
$controller = $_GET['controller'] ?? '';

switch($controller) {
    case 'user' :
        //go to user controller
        require_once "controller/UserController.php";
    break;
    case 'todo' :
        //go to todo
    break;
    default : 
        //go to user controller
        require_once "controller/UserController.php";
    break;
}

?>