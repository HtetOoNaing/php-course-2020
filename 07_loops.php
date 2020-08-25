<?php

// while
while (true) {

}
// Loop with $counter
$counter = 0;
while($counter < 10) {
    echo $counter;
    $counter++;
}

// do - while
do {
    echo $counter;
    $counter++;
} while(false);

// for
for ($i=1; $i < 10; $i+=2) {
    echo $i;
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $key => $fruit) {
    echo  $key . ' => ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Mg Mg',
    'height' => '8.1',
    'age' => 30,
];
foreach ($person as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}
