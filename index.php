<?php
// Class Inheritance:
class Student extends Person {
    public $studentID;

    function __construct($name, $age, $studentID) {
        parent::__construct($name, $age);
        $this->studentID = $studentID;
    }

    function study() {
        echo $this->name . " is studying.";
    }
}

$student = new Student("Alice", 22, "S12345");
$student->greet();
$student->study();


?>