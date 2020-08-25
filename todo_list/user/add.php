<?php
  $errors=[];
  $name="";
  $email="";
  $role = "";
  if(isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? '';

    if(!$name) {
      $errors['name'] = 'Name field is required!';
    }
    if(!$email) {
      $errors['email'] = 'Email field is required!';
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Please enter valid email address';
    }
    if(!$role) {
      $errors['role'] = 'Role field is required!';
    }

    if(empty($errors)) {
        
        // echo $name . ' - ' . $email . ' - ' . $password . '<br>';
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'php_course';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
        if(! $conn ){
            die('Could not connect: ' . mysqli_error());
        }

        $sql = "INSERT INTO users (name, email, password, role,profile) VALUES ('".$name."','".$email."','secret','".$role."','')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // echo "New record created successfully";
            header('Location:index.php');
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
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" novalidate enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" value="<?php echo $name ?>" class="form-control <?php echo isset($errors['name']) ? 'is-invalid' :'' ?>" id="name">
      <small class="form-text text-danger"><?php echo $errors['name'] ?? '' ?></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" value="<?php echo $email ?>" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' :'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small class="form-text text-danger"><?php echo $errors['email'] ?? '' ?></small>
    </div>
    <div class="form-group">
      <label for="role">Role</label>
      <input type="text" name="role" value="<?php echo $role ?>" class="form-control <?php echo isset($errors['role']) ? 'is-invalid' :'' ?>" id="role">
      <small class="form-text text-danger"><?php echo $errors['role'] ?? '' ?></small>
    </div>
    
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
