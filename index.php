<?php
// Polymorphism (Interface):
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Rectangle Area: " . $rectangle->calculateArea();


?>