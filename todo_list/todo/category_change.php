<?php
    include '../db_connect.php';

    $category = $_REQUEST['category'];
    
    if($category == 'all') {
        $sql = "SELECT todo.*,users.name as created_name, u.name as updated_name 
            FROM todo 
            LEFT JOIN users ON todo.created_by = users.id 
            LEFT JOIN users u ON todo.updated_by = u.id ";
    } else {
        $sql = "SELECT todo.*,users.name as created_name, u.name as updated_name 
            FROM todo 
            LEFT JOIN users ON todo.created_by = users.id 
            LEFT JOIN users u ON todo.updated_by = u.id  WHERE todo.category = '".$category."'";
    }

    $result = mysqli_query($conn, $sql);
    
    
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