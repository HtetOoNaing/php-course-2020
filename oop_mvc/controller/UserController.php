<?php

$action = $_GET['action'] ?? '';

switch($action) {
    case 'add' : 
        //action
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $result = $model->executeQuery("INSERT INTO users (name,email,password) VALUES ('".$name."','".$email."','secret')");
            if($result) {
                header('location:index.php?controller=user');
            }
        }
        require_once "view/add.php";
    break;
    case 'edit' : 
        //action
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $name = $_GET['name'];
            $email = $_GET['email'];
        }
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $result = $model->executeQuery("UPDATE users SET name='".$name."',email='".$email."' WHERE id=$id");
            if($result) {
                header('location:index.php?controller=user');
            }
        }

        require_once "view/edit.php";
    break;
    case 'delete' : 
        //action
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $result = $model->executeQuery("DELETE FROM users WHERE id=$id");
        if($result) {
            header('location:index.php?controller=user');
        }
    break;
    default : 
        //action
        $result = $model->executeQuery('select * from users');
        require_once "view/index.php";
    break;
}

?>