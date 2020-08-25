<?php 

include '../db_connect.php';


$sql = 'SELECT * from users';
$result = mysqli_query($conn, $sql);
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
        echo "<td>";
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