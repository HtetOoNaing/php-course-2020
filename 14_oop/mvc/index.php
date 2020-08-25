<?php 

include "model/CRUD.php";

$crud = new CRUD;

$controller = $_GET['controller'] ?? '';

switch($controller) {
    case 'user' : 
        require_once "controller/index.php";
    break;
    default :
        require_once "controller/index.php";
    break;
}

?>