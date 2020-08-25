<?php

// What is class and instance

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter


// declare(strict_types = 1);

// class Person {
//     public string $name;
//     public int $age;
//     const EXAMPLE = 'This is constant example';
//     public function __construct($name,$age) {
//         $this->name = $name;
//         $this->age = $age;
//         // echo 'Hello World'.'<br>';
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function setName(string $name) {
//         $this->name = $name;
//     }

    

    // public function __destruct() {
    //     echo "Name : $this->name . Age : $this->age <br>";
    // }
    
// }

// class Student extends Person {
//     public $roll_no = 1;
// }

// $person = new Person('Mg Mg',22);



// try {
//     $person->setName('Khin KHin');
// } catch (Error $e) {
//     // echo $e->getMessage();
// } finally {
//     echo 'This is finally <br>';
// }

// echo $person->getName();

// $student = new Student('Mg Mg',33);

// echo $student->sayName();

// echo Person::$name . "<br>";
// echo Person::getName();
// $mgmg = new Person("Mg Mg",22);
// echo 'Bla Bla'."<br>";
// echo $mgmg->getName();
// echo '<br>';
// unset($mgmg);
// echo 'This is the end of the file <br>';

// $kyawkyaw = new Person ("Kyaw Kyaw", 24);


// $student = new Student('Khin Khin',18);


// $aung = new Person('Aung Aung',44);
// echo $aung->name .'<br>';


// Annonymous Class

// class Person {
//     public function sayHello() {
//         echo 'hello';
//     }
// }

// $person = new Person;
// $person->sayHello();

$person = new class {
    public function sayHello() {
        echo 'hello';
    }
};

$person->sayHello();