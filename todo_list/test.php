<?php
include 'db_connect.php';

$sql = 'SELECT name FROM todos WHERE id IN (1,2,3)';

$result = mysqli_query($conn, $sql);

echo '<pre>';
foreach ($result as $row) {
    print_r($row);
}
// var_dump ($result); 
echo '</pre>';


// UNION
// $sql = 'SELECT name FROM todo UNION SELECT name FROM users';

// GROUP BY
// $sql = 'SELECT COUNT(name) count_name, category FROM todo GROUP BY category';

// HAVING
// $sql = 'SELECT COUNT(name) count_name, category FROM todo GROUP BY category HAVING count(name) > 2';

// EXISTS
// $sql = 'SELECT name FROM todo WHERE EXISTS (SELECT name FROM users WHERE todo.created_by = users.id)';


// ANY/ALL
// $sql = 'SELECT name FROM todo WHERE created_by = ANY (SELECT id FROM users WHERE role = "admin")';

?>