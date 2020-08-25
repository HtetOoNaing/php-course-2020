<?php

$age = 42;
$salary = 300000;

// if condition
// if ($age == 30) {
//     echo 'You are 30 years old';
// } else if ($age == 40) {
//     echo 'You are 40 ';
// } else {
//     echo 'Something';
// }

// if condition - else
// if ($age < 30) {
//     echo 'You are young';
// } else {
//     echo 'You are old';
// }

// if condition1 AND condition2
// if ($age < 30 && $salary === 300000) {
//     echo 'You are paid good';
// } else {
//     echo 'Yor are paid bad';
// }

// if(30 == '30') {
//     echo "They are equal";
// } else {
//     echo 'They are not equal';
// }

// if condition1 OR condition2
// if ($age < 30 || $salary === 300000) {
//     echo 'You are paid good';
// } else {
//     echo 'Yor are paid bad';
// }


// if condition1 - elseif condition2 - else
// if ($age < 30) {
//     echo 'You are young';
// } elseif ($age < 50) {
//     echo 'Yor are not yound but not old';
// } else {
//     echo 'You are old';
// }
// if condition1 and condition2 - elseif condition1 and condition2 - else


// Ternary if
// echo $age > 50 ? 'You are old' : 'You are young';
// echo '<br>';

echo $age ?? 30;
$errors =['name' => 'dd'];
echo isset($errors['name']) ? 'Someting' : 'Name is not empty';

// Null coalescing operator

// Null coalescing assignment operator. Since PHP 7.4

// switch
// $userRole = 'admin'; // admin, editor, user

// switch ($userRole) {
//     case 'admin':
//         echo 'You can do anything<br>';
//         break;
//     case 'editor';
//         echo 'You can edit content<br>';
//         break;
//     case 'user':
//         echo 'You can view posts and comment<br>';
//         break;
//     default:
//         echo 'Unknown role<br>';
// }
