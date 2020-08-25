<?php

    include('../valid_session.php');

    $name ='';
    $category = '';
    $errors=[];
    if(isset($_POST['submit'])) {
        $name = $_POST['name'] ?? '';
        $category = $_POST['category'] ?? '';

        if(!$name) {
        $errors['name'] = 'Name field is required!';
        }
        if(!$category) {
        $errors['category'] = 'Category field is required!';
        }

        if(empty($errors)) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'php_course';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
        
            if(! $conn ){
                die('Could not connect: ' . mysqli_error());
            }
            // echo 'Connected successfully'. '<br>';

            $sql = "INSERT INTO todo (name,category,created_by,updated_by) VALUES ('".$name."','".$category."','".$user_id."','".$user_id."')";
            // $sql = 'SELECT * FROM users';
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo 'Record created successfully';
                $name ='';
                $category = '';
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
        <a href="../index.php" class="btn btn-success mt-4">Back to List</a>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="my-2" novalidate>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?= $name ?>" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" id="name">
                <small class="form-text text-danger"><?= $errors['name'] ?? '' ?></small>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" value="<?= $category ?>" class="form-control <?= $errors['category'] ? 'is-invalid' : '' ?>" id="category">
                <small class="form-text text-danger"><?= $errors['category'] ?? '' ?></small>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>