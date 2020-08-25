<?php
session_start();
// echo session_id();



$_SESSION['counter'] = 1;
echo $_SESSION['counter'];
$_SESSION['age'] = 22;


session_destroy();


// unset($_SESSION['age']);
// session_destroy();

// echo $_SESSION['counter'].'<br>';
// echo $_SESSION['age'];

// session_unset();

?>
