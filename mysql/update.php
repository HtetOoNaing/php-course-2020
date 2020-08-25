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
$sql = ' UPDATE users SET role="admin" WHERE id IN ("2","3","4")';
    
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);