<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'php_course';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ){
  die('Could not connect: ' . mysqli_error());
}
// echo 'Connected successfully'. '<br>';

$sql = 'DELETE FROM users WHERE id = "8"';

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
