<?php

$id = $_GET['id'] ?? '';
// echo $id;

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'php_course';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ){
  die('Could not connect: ' . mysqli_error());
}

$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('Location:index.php');

} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);