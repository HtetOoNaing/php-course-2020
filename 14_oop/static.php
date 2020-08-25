<?php
declare(strict_types = 1);
class Person {
    public string $name = "Mg Mg";
    public $age;

    const PI = 'hello pi';
    
    public static $greeting = 'Good Morning';
    
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getGreeting() {
        return self::$greeting;
    }
    public static function setGreeting(string $greeting) {
        self::$greeting = $greeting;
    }
}

class Student extends Person {
    public $roll_no = 1;
    // public static $greeting = "Hello World";
    public function sayHello() {
        return parent::$greeting;
    }
    public function getConstant() {
        return self::PI;
    }
}

$student = new Student;
echo $student->sayHello();

// echo Person::PI.'<br>';
// echo Person::$greeting . '<br>';
// echo Student::getGreeting() . '<br>';
// Student::setGreeting('hello');
// echo Student::getGreeting() . '<br>';

// echo Student::PI.'<br>';
// echo Student::getConstant().'<br>';
// echo Student::$greeting . '<br>';
// echo Student::sayHello() . '<br>';
// $person = new Person;
// echo $person->getName() . '<br>';
// try {
//     $person->setName(1);
//     echo $person->getName() . '<br>';
// } catch (Error $e) {
//     echo $e->getMessage();
// }
