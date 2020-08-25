<?php

// Create array
$fruits = ['A',1,'a'];


// $names = array('Mg Mg','Kyaw Kyaw');


// Print the whole array
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';
// echo '<br>';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Get element by index
// echo $fruits[1];

// Set element by index
// $fruits[1] = 'Mango';
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';

// Check if array has element at index 2 - isset

// var_dump(isset($fruits[1]));

// Append element - 
// $fruits[] = 'Mango';
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';

// Print the length of the array - count

// echo count($fruits);

// Add element at the end of the array - array_push
// array_push($fruits,'Mango');

// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';

// Remove element from the end of the array - array_pop
// array_pop($fruits);
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';

// Add element at the beginning of the array - array_unshift($arr,value)
// array_unshift($fruits,"Mango");
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';
// Remove element from the beginning of the array - array_shift
// array_shift($fruits);
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';

// Split the string into an array - explode(',',$string)
// $string = "Banana.Apple.Mango";
// $arr = explode('.',$string);
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// echo '<br>';

// $img = 'afdksjfkasjf.jpgjj';
// echo $img.'<br>';
// $arr = explode('.',$img);
// echo '<pre>';
// print_r($arr);
// echo '</pre>'.'<br>';
// $ext = end($arr);
// echo $ext.'<br>';
// $allowed = ['jpg','png','jpeg','svg'];
// if(in_array($ext,$allowed)) {
//     echo 'Yes allowed';
// } else {
//     echo 'Not allowed';
// }

// Combine array elements into string - implode('-',$arr)

// echo implode('-',$arr);


// Check if element exist in the array - in_array(value,$arr)
// var_dump(in_array('Banana',$fruits));
// echo '<br>';

// Search element index in the array - array_search(value,$arr)
// var_dump(array_search('addf',$fruits));

// Merge two arrays - array_merge($arr1,$arr2)
// $names = ['Mg Mg','Aung Aung'];
// $gender = ['Male','Female'];
// $arr = array_merge($names,$gender);

// $arr = [...$fruits,...$names];
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// $names = ['Mg Mg','Kyaw Kyaw'];
// echo '<pre>';
// print_r (array_merge($fruits,$names));
// echo '</pre>';
// $new_arr = [...$fruits,...$names];

// Sorting of array (Reverse order also) - sort,rsort
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';
// sort($fruits);
// echo '<pre>';
// print_r ($fruits);
// echo '</pre>';
// rsort($fruits);
// print_r($fruits);

// Filter, map, reduce of array - array_filter($arr,callback), array_map(callback,$arr), array_reduce($arr,callback)
$numbers = [0,1,2,3,4,5,6,7,8,9];
$evens = array_filter($numbers,fn($num) => $num % 2 === 0);
echo '<pre>';
print_r($evens);
echo '</pre>';

// echo '<pre>';
// print_r(array_values($evens));
// echo '</pre>';


$squares = array_map(fn($num) => $num % 2 === 0,$numbers);

// echo '<pre>';
// var_dump($squares);
// echo '</pre>';

$total = array_reduce($numbers,fn($carry ,$num) => $num);
echo "<pre>";
print_r($total);
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Mg Mg',
    'age' => 22,
    'height' => 8.1,
];

// Get element by key
// echo $person['height'];

// echo '<pre>';
// print_r($person);
// echo '</pre>';

// Set element by key
// $person['name'] = "Kyaw Kyaw";
// $person ['gender'] = 'Male';
// echo '<pre>';
// print_r($person);
// echo '</pre>';

// Check if array has specific key
// var_dump(isset($person['dd']));

// Print the keys of the array
// $keys = array_keys($person);
// echo '<pre>';
// print_r($keys);
// echo '</pre>';

// Print the values of the array
// $values = array_values($person);
// echo '<pre>';
// print_r($values);
// echo '</pre>';

// Sorting associative arrays by values, by keys // ksort, krsort, asort, arsort
// arsort($person);
// echo '<pre>';
// print_r($person);
// echo '</pre>';

// Two dimensional arrays
// $todoItems = [
//     ['one','two','three'],
//     ['four','five','six'],
//     ['seven','eight','nine']
// ];
// $todoItems = [
//     'one' => ['title' => 'Todo1', 'completed' => true],
//     'two' => ['title' => 'Todo 2', 'completed' => false],
// ];
// echo '<pre>';
// print_r($todoItems['one']['title']);
// echo '</pre>';
