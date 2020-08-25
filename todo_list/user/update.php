<?php

    include "../valid_session.php";

    $id = $_GET['id'] ?? '';
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
    $role = $_GET['role'] ?? '';
    $profile = $_GET['profile'] ?? '';
    // echo $id,$name,$email,$role,$profile;
    $errors=[];
    if(isset($_POST['submit'])) {

        $id = $_POST['id'] ?? '';
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $role = $_POST['role'] ?? '';
        $profile = $_POST['old_profile'] ?? '';

        if(!$name) {
        $errors['name'] = 'Name field is required!';
        }
        if(!$email) {
        $errors['email'] = 'Email field is required!';
        }
        if(!$role) {
            $errors['role'] = 'Role field is required!';
        }

        if(empty($errors)) {

            $file = $_FILES['profile'];

            if($file['name']) {
                $result = move_uploaded_file($file['tmp_name'],'../uploads/'.$file['name']);
                if($result) {
                  $profile = $file['name'];
                } else {
                  echo 'image uploading fail';
                }
            }


            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'php_course';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
        
            if(! $conn ){
                die('Could not connect: ' . mysqli_error());
            }

            $sql = "UPDATE users SET name='".$name."',email='".$email."',role='".$role."',profile='".$profile."'  WHERE id =$id ";
            // $sql = 'SELECT * FROM users';
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo 'Record updated successfully';
                header('Location:index.php');
            }else {
                echo 'Record updated failed';
            }
            mysqli_close($conn);
            }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <div class="w-50 m-auto">
        <a href="index.php" class="btn btn-success mt-4">Back to List</a>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="my-2" novalidate enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>" />
            <input type="hidden" name="old_profile" value="<?= $profile ?>" />
            
            <div class="form-group">
                <img src="../uploads/<?= $profile ?>" width="50" height="50" alt="">
                <label for="profile">
                    <a class="btn btn-sm btn-info">edit profile</a>
                </label>
                <input type="file" name="profile" class="form-control d-none " id="profile">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?= $name ?>" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" id="name">
                <small class="form-text text-danger"><?= $errors['name'] ?? '' ?></small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?= $email ?>" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" id="email">
                <small class="form-text text-danger"><?= $errors['email'] ?? '' ?></small>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" value="<?= $role ?>" class="form-control <?= $errors['role'] ? 'is-invalid' : '' ?>" id="role">
                <small class="form-text text-danger"><?= $errors['role'] ?? '' ?></small>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>