<?php

// Define the Shape interface
interface Shape {
    public function calculateArea();
}

// Implement the Shape interface in the Circle class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Implement the Shape interface in the Square class
class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Function that takes any object implementing the Shape interface
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "\n";
}

// Create instances of Circle and Square
$circle = new Circle(5);
$square = new Square(4);


printArea($circle); 
printArea($square); 

?>
