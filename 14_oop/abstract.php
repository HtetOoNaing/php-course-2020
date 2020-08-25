<?php 

// trait Name {
//     public function sayHello() {
//         echo 'Hello everyone';
//     }
//     public function greeting() {
//         echo 'Good Morning';
//     }
// }

// abstract class Person {
//     // use Name;
//     public $name = "Mg Mg";
//     public $age;
    
//     abstract public function getName();

//     public function setName($name) {
//         $this->name = $name;
//     }
// }

// class Student extends Person {
//     public $roll_no = 1;
//     public function getName() {
//         return $this->name;
//     }
// }

// // $person = new Person;
// // $person->hello();

// $student = new Student();
// echo $student->getName();


interface a {
    public function hello();
}
interface b {
    public function hi();
}

interface c extends a,b {
    public function hic();
}

class Person implements a,b {
    public $name = "Mg Mg";
    public $age;
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function hello() {
        echo 'hello';
    }
    public function hi() {
        echo 'hi';
    }
    public function hic() {
        echo 'hic';
    }

}

$person = new Person;
$person->hello();

?>