<?php
    include '../db_connect.php';
    $id = $_REQUEST['id'] ?? '';
    $index = $_REQUEST['index'] ?? '';
    $checked = $_REQUEST['checked'] ?? '';
    $bool_checked = $checked === 'true' ? 1 : 0;

    $sql = "UPDATE todo SET checked = $bool_checked WHERE id = '".$id."' ";
    $result = mysqli_query($conn, $sql);


    $select_sql = "SELECT todo.*,users.name as created_name, u.name as updated_name 
    FROM todo 
    LEFT JOIN users ON todo.created_by = users.id 
    LEFT JOIN users u ON todo.updated_by = u.id WHERE todo.id = '".$id."'";

    $result = mysqli_query($conn, $select_sql);

    // echo '<pre>';
    // print_r(mysqli_fetch_assoc($result));
    // echo '</pre>';
    $row = mysqli_fetch_assoc($result);
    $id = $row["id"];
    $name = $row['name'];
    $category = $row['category'];
    $checked = $row['checked'];
    $created_by = $row['created_name'];
    $updated_by = $row['updated_name'];

    echo "<th scope='row'>";
    echo $index;
    echo "</th>";
    echo '<td>';
    if($checked) {
        echo "<input type='checkbox' id='$id' name='$index' onchange='oncheckboxchange(this)' checked />";
    } else {
        echo "<input type='checkbox' id='$id' name='$index' onchange='oncheckboxchange(this)'  />";
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
?>