<?php

// Declaring numbers
$one = 20;
$two = 2.1;

// Arithmetic operations + - * / %
// $sum = $one + $two;
// echo $sum;

// Assignment with math operators
// $one += $two;
// echo $one;

// Increment operator $a++, ++$a
// echo ++$one;
// echo $one;

// Decrement operator
// echo --$one.'<br>';
// echo $one;

// Number checking functions is_integer()
// var_dump(is_numeric(2.6)); 

// Conversion (float)$a, floatval($a)
// $a = '';
// echo gettype($a);
// $b = floatval($a);
// var_dump($b);

// Number functions abs,pow,sqrt,max,min,round,floor,ceil

echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3,4) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// Formatting numbers number_format($number,2,'.',',')
$number = 12334454643.14252;
echo number_format($number,2,',','-');

// https://www.php.net/manual/en/ref.math.php
