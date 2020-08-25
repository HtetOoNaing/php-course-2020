<?php

// Create simple string
// $name = 'Mg Mg';
// echo "My name is $name " . '<br>';
// echo 'My name is '.$name;

// String functions

// $string = "     Hello World     ";
// echo $string.'<br>';
// echo "1 - " . strlen($string) . '<br>' ;
// echo "2 - " . trim($string) . '<br>' . PHP_EOL;
// echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
// echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
// echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
// echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
// echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
// echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
// echo "9 - " . ucfirst('hello world') . '<br>' . PHP_EOL;
// echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
// echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
// echo "12 - " . strpos($string, 'World') . '<br>' . PHP_EOL; // 5. Change into world
// echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
// echo "14 - " . substr($string, 8, 5) . '<br>' . PHP_EOL;
// echo "15 - " . str_replace('world', 'PHP', $string) . '<br>' . PHP_EOL;
// echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;


$invoiceNumber = 1;
// $invoiceNumber2 = 123456;
// echo str_pad($invoiceNumber, 8, '0', STR_PAD_BOTH) . '<br>' . PHP_EOL;
// echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;

// Multiline text and line breaks - nl2br

$longText = "
  Hello, my name is Mg Mg
  I am 27,
  I love my daughter
";
echo $longText . '<br>' ;
echo nl2br($longText) . '<br>' ;

$text = "Hello, my name is Zura, I am 27, I love my daughter";
// Zura Love Her Daughter

// https://www.php.net/manual/en/ref.strings.php
