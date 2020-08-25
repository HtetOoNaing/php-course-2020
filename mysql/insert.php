<?php
/**
 * User: TheCodeholic
 * Date: 2/8/2020
 * Time: 9:49 AM
 */
  $errors=[];
  $name="";
  $email="";
  $password="";
  $confirm_password='';
  if(isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    if(!$name) {
      $errors['name'] = 'Name field is required!';
    }
    if(!$email) {
      $errors['email'] = 'Email field is required!';
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Please enter valid email address';
    }
    if(!$password) {
      $errors['password'] = 'Password field is required!';
    } elseif (strlen($password) < 6) {
      $errors['password'] = 'Password length must be at least 6 digits';
    }
    if(!$confirm_password) {
      $errors['confirm_password'] = 'Confirm Password field is required!';
    } elseif ($password != $confirm_password) {
      $errors['confirm_password'] = 'This must match with password field';
    }

    if(empty($errors)) {
        echo $name . ' - ' . $email . ' - ' . $password . '<br>';
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'php_course';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
        if(! $conn ){
            die('Could not connect: ' . mysqli_error());
        }
        // echo 'Connected successfully'. '<br>';

        $sql = "INSERT INTO users (name,email,password,role,profile) VALUES ('".$name."','".$email."','".$password."','user','51hKyr0it6L.png')";
        $result = mysqli_query($conn, $sql);
        var_dump($result);
        if ($result) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
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
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" novalidate>
    <div class="form-group">
      <label for="name">Email address</label>
      <input type="text" name="name" value="<?php echo $name ?>" class="form-control <?php echo isset($errors['name']) ? 'is-invalid' :'' ?>" id="name">
      <small class="form-text text-danger"><?php echo $errors['name'] ?? '' ?></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" value="<?php echo $email ?>" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' :'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small class="form-text text-danger"><?php echo $errors['email'] ?? '' ?></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" value="<?php echo $password ?>" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' :'' ?>" id="exampleInputPassword1">
      <small class="form-text text-danger"><?php echo $errors['password'] ?? '' ?></small>
    </div>
    <div class="form-group">
      <label for="confirm_password">Confirm Password</label>
      <input type="password" name="confirm_password" value="<?php echo $confirm_password ?>" class="form-control <?php echo isset($errors['confirm_password']) ? 'is-invalid' :'' ?>" id="confirm_password">
      <small class="form-text text-danger"><?php echo $errors['confirm_password'] ?? '' ?></small>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
