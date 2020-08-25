<?php
  // $errors=[];
  // $name="";
  // $email="";
  // $password="";
  // $confirm_password='';
  // if(isset($_POST['submit'])) {
  //   $name = $_POST['name'] ?? '';
  //   $email = $_POST['email'] ?? '';
  //   $password = $_POST['password'] ?? '';
  //   $confirm_password = $_POST['confirm_password'] ?? '';
  //   if(!$name) {
  //     $errors['name'] = 'Name field is required!';
  //   }
  //   if(!$email) {
  //     $errors['email'] = 'Email field is required!';
  //   } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  //     $errors['email'] = 'Please enter valid email address';
  //   }
  //   if(!$password) {
  //     $errors['password'] = 'Password field is required!';
  //   } elseif (strlen($password) < 6) {
  //     $errors['password'] = 'Password length must be at least 6 digits';
  //   }
  //   if(!$confirm_password) {
  //     $errors['confirm_password'] = 'Confirm Password field is required!';
  //   } elseif ($password != $confirm_password) {
  //     $errors['confirm_password'] = 'This must match with password field';
  //   }

  //   if(empty($errors)) {
  //     echo $name . ' - ' . $email . ' - ' . $password . '<br>';
  //     $dbhost = 'localhost';
  //     $dbuser = 'root';
  //     $dbpass = '';
  //     $dbname = 'intern';
  //     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
  //     if(! $conn ){
  //       die('Could not connect: ' . mysqli_error());
  //    }
  //    echo 'Connected successfully'. '<br>';
  //   //  mysqli_select_db('intern');
  //   $sql = 'SELECT * FROM users';
  //   $result = mysqli_query($conn, $sql);
  //   echo '<pre>';
  //   print_r ($result);
  //   echo '<pre>';
  //   // if (mysqli_num_rows($result) > 0) {
  //   //   while($row = mysqli_fetch_assoc($result)) {
  //   //     echo "Name: " . $row["name"]. "<br>";
  //   //   }
  //   // } else {
  //   //   echo "0 results";
  //   // }
  //   mysqli_close($conn);
  //   }
    
  // }

  $errors=[];
   
  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!$email) {
      $errors['email'] = 'Email field is required!';
    } 
  }
  
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<div class="w-50 m-auto">
  
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" value="" id="exampleInputEmail1">
      <small id="emailHelp" class="form-text text-danger">
        <?php echo $errors['email'] ?? '' ?>
      </small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" value="" id="exampleInputPassword1">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
