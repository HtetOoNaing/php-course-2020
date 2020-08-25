<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'php_course';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(!$conn ){
  die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully'. '<br>';

$sql = 'SELECT * FROM users WHERE name LIKE "%n%"';
$result = mysqli_query($conn, $sql);
echo '<pre>';
// print_r($result);
while($row = mysqli_fetch_assoc($result)) {
  print_r ($row);
}
echo '<pre>';



mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<div class="w-50 m-auto">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th scope='row'>";
            echo $row["id"];
            echo "</th>";
            echo "<th>";
            echo $row['name'];
            echo "</th>";
            echo "<th>";
            echo $row['email'];
            echo "</th>";
            echo "<th>";
            echo "<button class='btn btn-sm btn-info'>Edit</button>";
            echo " ";
            echo "<button class='btn btn-sm btn-danger'>Delete</button>";
            echo "</th>";
            echo "</tr>";
          }
        } else {
          echo "No user yet !!";
        }
      ?>
    </tbody>
  </table>
</div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>