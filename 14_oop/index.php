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
// $person = new class {
//     public function sayHello() {
//         echo 'hello';
//     }
// };
// $person->sayHello();

// class Person {
//     public $name;
//     protected $age;
//     private $email;

//     public function __construct($name,$age,$email) {
//         echo 'constructor'.'<br>';
//         $this->name = $name;
//         $this->age = $age;
//         $this->email = $email;
//     }
//     public function sayHello() {
//         return 'Hello';
//     }
//     public function getName() {
//         return $this->name;
//     }
//     public function setName($name) {
//         $this->name = $name;
//     }
//     public function getEmail() {
//         return $this->email;
//     }
//     public function __destruct() {
//         echo 'destructor'.'<br>';
//     }
// }

// class Student extends Person {
//     public function getAge() {
//         return $this->age;
//     }
// }

// $person = new Person('Mg Mg',22,'mgmg@gmail.com');
// echo $person->getName();
// echo '<br>';
// echo $person->setName('Kyaw Kyaw');
// echo $person->getName();
// echo '<br>';

// $person = new Person('Khin Khin',12,'khin@gmail.com');
// echo $person->getName();
// echo '<br>';

// $student = new Student('Mg Mg',22,'mgmg@gmail.com');
// echo $student->getAge();

class Person {

    public $name;
    public $email;

    public static $age = 22;

    public function __construct($name,$email) {
        // echo 'I am constructor <br>';
        $this->name = $name;
        $this->email = $email;
        
    }

    public static function getAge() {
        return self::$age;
    }

    public function getName() {
        return self::getAge();
        // return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function __destruct() {
        // echo 'I am destructor <br>';
    }

}


// echo Person::$age;
// echo Person::$name;
// echo Person::getAge();

$person = new Person('Mg Mg','mgmg@gmail.com');
echo $person->getName() . '<br>';

// echo $person->getAge();

// class Student extends Person {
//     public $roll_no;
//     public function __construct($name,$email,$roll_no) {
//         parent::__construct($name,$email);
//         $this->roll_no = $roll_no;
//     }
//     public function hello() {
//         return "Hello Mg Mg";
//     }
// }

// $person = new Person('Mg Mg');
// // echo $person->name;
// echo $person->getName();
// echo '<br>';
// $person->setName('Aung Aung');
// echo $person->getName();
// echo '<br>';
// unset($person);

// echo 'Something <br>';

// $student = new Student('Mg Mg','mgmg@gmail.com','7CE-11');
// echo $student->name;
// echo '<br>';
// echo $student->email;
// echo '<br>';
// echo $student->roll_no;
// echo '<br>';