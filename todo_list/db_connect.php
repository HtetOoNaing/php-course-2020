<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'php_course';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
if(! $conn ){
  die('Could not connect: ' . mysqli_error());
}