<?php
include "valid_session.php";

include 'db_connect.php';

$category_sql = 'SELECT DISTINCT category from todo';
$categories = mysqli_query($conn, $category_sql);

$sql = 'SELECT todo.*,users.name as created_name, u.name as updated_name 
        FROM todo 
        LEFT JOIN users ON todo.created_by = users.id 
        LEFT JOIN users u ON todo.updated_by = u.id ';

$result = mysqli_query($conn, $sql);

$search_name="";
$category_select="all";
$errors=[];
if(isset($_POST['submit'])) {
    $search_name = $_POST['search_name'] ?? '';
    $category_select = $_POST['category_select'] ?? '';

    if(!$search_name) {
        $errors['search_name'] = 'field is required!';
    }

    if(empty($errors)) {
        if($category_select == 'all') {
            $sql = "SELECT todo.*,users.name as created_name, u.name as updated_name 
            FROM todo
            LEFT JOIN users ON todo.created_by = users.id 
            LEFT JOIN users as u ON todo.updated_by = u.id  WHERE todo.name LIKE '%$search_name%' ";
        } else {
            $sql = "SELECT todo.*,users.name as created_name, u.name as updated_name 
            FROM todo 
            LEFT JOIN users ON todo.created_by = users.id 
            LEFT JOIN users u ON todo.updated_by = u.id  WHERE todo.category = '".$category_select."' AND todo.name LIKE '%$search_name%' ";
        }

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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Todo <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user/index.php">User</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $user_name ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="user/view.php?id=<?= $user_id ?>">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <a href="todo/add.php" class="btn btn-success mt-4">Add</a>
        <form class="form-inline my-3" method='post' >
            
            <div class="form-group mr-sm-3 mb-2">
                <select name="category_select" id="category_select" class="form-control">
                    <option value="all">All Categories</option>
                    <?php
                    foreach($categories as $category) {
                        $item = $category["category"];
                        if($item == $category_select ) {
                            echo "<option value='$item' selected >$item</option>";
                        } else {
                            echo "<option value='$item' >$item</option>";
                        }
                        
                    } ?>
                </select>
            </div>
            <div class="form-group mr-sm-3 mb-2">
                <input type="text" id="search_name" value="<?= $search_name ?>" class="form-control" name="search_name" placeholder="enter todo name">
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-2">Search</button>
        </form>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th></th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Created By</th>
                <th scope="col">Updated By</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php
                
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $id = $row["id"];
                        $name = $row['name'];
                        $category = $row['category'];
                        $checked = $row['checked'];
                        $created_by = $row['created_name'];
                        $updated_by = $row['updated_name'];

                        echo "<tr>";
                        echo "<th scope='row'>";
                        echo $i;
                        echo "</th>";
                        echo '<td>';
                        if($checked) {
                            echo "<input type='checkbox' id='$id' name='$i' onchange='oncheckboxchange(this)' checked />";
                        } else {
                            echo "<input type='checkbox' id='$id' name='$i' onchange='oncheckboxchange(this)'  />";
                        }
                        echo "</td>";
                        echo "<td>";
                        if($checked) {
                            echo "<span style='text-decoration:line-through'> $name</span>";
                        } else {
                            echo "<span> $name</span>";
                        }
                        
                        echo "</td>";
                        echo "<td>";
                        echo $category;
                        echo "</td>";
                        echo "<td>";
                        echo $created_by;
                        echo "</td>";
                        echo "<td>";
                        echo $updated_by;
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='todo/update.php?id=$id&name=$name&category=$category' class='btn btn-sm btn-outline-info'>Edit</a>";
                        echo " ";
                        echo "<a href='todo/delete.php?id=$id' class='btn btn-sm btn-outline-danger'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    
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

    function oncheckboxchange (obj) {
        if($(obj).is(":checked")){
            console.log("Yes checked"); //when checked
            $(obj).parent().parent().load('todo/change_checkbox.php',{id: obj.id,index: obj.name, checked: true});
        }else{
            console.log("Not checked"); //when not checked
            $(obj).parent().parent().load('todo/change_checkbox.php',{id: obj.id,index: obj.name, checked: false});
        }
    }

    $(document).ready(function() {	
        $("#search_name").keyup(function(event){
            console.log(event.target.value);
            if(!event.target.value) {
                $('#tbody').load('todo/search.php');
            }
        });	
        $('#category_select').change(function(event) {
            console.log(event.target.value);
            $('#tbody').load('todo/category_change.php',{category:event.target.value});
        });
        
    });
</script>
</body>
</html>