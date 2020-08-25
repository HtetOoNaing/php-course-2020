<?php
// include '../valid_session.php';

$user_id = $_GET['id'] ?? '';
include '../db_connect.php';

$sql = "SELECT * FROM users WHERE id=$user_id";

$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

$sql1 = "SELECT todo.id,todo.name,todo.category,users.name as updated_name 
        FROM todo JOIN users ON todo.updated_by = users.id WHERE todo.created_by = $user_id";
$todos = mysqli_query($conn, $sql1);


// echo '<pre>';
// foreach(($result1) as $todo) {
//     print_r($todo);
// }
// echo '</pre>';

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
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Todo <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">User</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $user['name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="user/view.php?id=<?= $user_id ?>">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="text-center">
            <img src="../uploads/<?= $user['profile'] ?>" width="100" height="100">
            <h5>Name : <?= $user['name'] ?></h5>
            <h5>Email: <?= $user['email'] ?></h5>
            <h5>Role : <?= $user['role'] ?></h5>
        </div>

        <div class="row">
            <?php foreach($todos as $todo) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $todo['name'] ?></h5>
                            <p class="card-text">Category : <?= $todo['category'] ?> </p>
                            <p class="card-text">Updated By : <?= $todo['updated_name'] ?> </p>
                        </div>
                        <div class="card-footer">
                            <a href="../todo/update.php?id=<?= $todo['id'] ?>&name=<?= $todo['name'] ?>&category=<?= $todo['category'] ?>" class='btn btn-sm btn-outline-info'>Edit</a>
                            <a href='../todo/delete.php?id=<?= $todo['id'] ?>' class='btn btn-sm btn-outline-danger'>Delete</a>
                        </div>
                    </div>  
                </div>
            <?php } ?>
            
        </div>
    </div>

<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>