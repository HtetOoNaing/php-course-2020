<?php

    session_start();
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
        $user_name = $_SESSION['name'];
    } else {
        header('Location:login.php');
    }

?>