<?php

// Function which prints "Hello I am TheCodeholic"
// function hello($name,$age) {
//     echo "Hello, my name is $name and I am $age years";
// }

// hello('Mg',32);
// hello('Zaw',22);

// hello('Mg Mg','Mandalay');
// hello('Kyaw Kyaw','Yangon');
// hello('Mg Mg','Mandalay');
// hello('Kyaw Kyaw','Yangon');
// hello();
// Create sum of two functions
// function sum ($a,$b) {
//     if (is_float($a) || is_float($b)) {
//         echo 'Invalid input';
//     } else {
//         echo 'The sum of two numbers is ',$a+$b;
//     }   
//    echo "THE SUM IS ", $a+$b ;
// }

// sum(3,4);

// Create function to sum all numbers using ...$nums
function sum(...$nums)
{
   // echo '<pre>';
   // print_r ($nums);
   // echo '</pre>';
   $sum = 0;
   foreach ($nums as $num) $sum += $num;
   echo $sum;
}
sum(1,2,5);

// Arrow functions

