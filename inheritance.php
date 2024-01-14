<?php

// Single Inheritance
class Animal {
    public function makeSound() {
        return "Generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

// Multiple Inheritance (Simulated using interfaces)
interface Flyable {
    public function fly();
}

class Bird extends Animal implements Flyable {
    public function fly() {
        return "Bird is flying";
    }
}

// Multilevel Inheritance
class Poodle extends Dog {
    // Inherits from Dog, which inherits from Animal
}

// Hierarchical Inheritance
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Creating instances and demonstrating inheritance
$dog = new Dog();
$bird = new Bird();
$poodle = new Poodle();
$cat = new Cat();

echo "Dog says: " . $dog->makeSound() . "\n";
echo "Bird says: " . $bird->makeSound() . "\n";
echo "Poodle says: " . $poodle->makeSound() . "\n";
echo "Cat says: " . $cat->makeSound() . "\n";
echo "Bird can fly: " . $bird->fly() . "\n";

?>
