<?php
include "../valid_session.php";

include '../db_connect.php';


$sql = 'SELECT * from users';
$result = mysqli_query($conn, $sql);


$search_name="";
$errors=[];
if(isset($_POST['submit'])) {
    $search_name = $_POST['search_name'] ?? '';
    if(!$search_name) {
        $errors['search_name'] = 'field is required!';
    }
    if(empty($errors)) {
        $sql = "SELECT * from users WHERE name LIKE '%$search_name%' OR email LIKE '%$search_name%' ";
        $result = mysqli_query($conn, $sql);
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
    <div class="container" id="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Todo </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">User <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $user_name ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="view.php?id=<?= $user_id ?>">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <a href="add.php" class="btn btn-success mt-4">Add</a>
        <form class="form-inline my-3" method='post' >
            <div class="form-group mr-sm-3 mb-2">
                <input type="text" id="search_name" value="<?= $search_name ?>" class="form-control" name="search_name" placeholder="enter user name or email">
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-2">Search</button>
        </form>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Profile</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php
                
                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row['name'];
                        $email = $row['email'];
                        $role = $row['role'];
                        $profile = $row['profile'];

                        echo "<tr>";
                        echo "<th scope='row'>";
                        echo $i++;
                        echo "</th>";
                        echo '<td>';
                        echo $profile ? "<img src='../uploads/$profile' width='25' height='25' />" : 'no';
                        echo "</td>";
                        echo "<td>";
                        echo $name;
                        echo "</td>";
                        echo "<td>";
                        echo $email;
                        echo "</td>";
                        echo "<td>";
                        echo $role;
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='view.php?id=$id' class='btn btn-sm btn-outline-primary'>View</a>";
                        echo " ";
                        echo "<a href='update.php?id=$id&name=$name&email=$email&role=$role&profile=$profile' class='btn btn-sm btn-outline-info'>Edit</a>";
                        echo " ";
                        echo "<a href='delete.php?id=$id' class='btn btn-sm btn-outline-danger'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No user yet !!";
                }
            ?>
            </tbody>
        </table>
    </div>

    <?php 
        mysqli_close($conn);
    ?>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type = "text/javascript" language = "javascript">
    $(document).ready(function() {	
        $("#search_name").on('keyup',function(event){
            console.log(event.target.value);
            if(!event.target.value) {
                $('#tbody').load('search.php');
            }
        });		
    });
</script>
</body>
</html>