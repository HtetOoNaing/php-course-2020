<?php

$action = $_GET['action'] ?? '';

switch($action) {
    case 'add' : 
        // logic
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];

            if(!empty($name) && !empty($email)) {
                $result = $crud->executeQuery("INSERT INTO users (name, email, password) VALUES ('".$name."','".$email."','secret')");
                if($result) {
                    header('Location:index.php?controller=user');
                }
            }
        }
        require_once "view/add.php";
    break;
    case 'edit' : 
        // logic
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $name = $_GET['name'];
            $email = $_GET['email'];
        }
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            if(!empty($name) && !empty($email)) {
                $result = $crud->executeQuery("UPDATE users SET name='".$name."',email='".$email."'  WHERE id =$id ");
                if($result) {
                    header('Location:index.php?controller=user');
                }
            }
        }
        require_once "view/edit.php";
    break;
    case 'delete' : 
        // logic
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $crud->executeQuery("DELETE FROM users WHERE id = $id");
            if($result) {
                header('Location:index.php?controller=user');
            }
        }
    break;
    default : 
        // logic
        $users = $crud->executeQuery("SELECT * FROM users");
        require_once "view/index.php";
    break;
}

?>