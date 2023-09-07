<?php
// Class Definition:
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function greet() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$person = new Person("John", 30);
$person->greet();


?>