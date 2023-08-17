<?php
// Parent class
class Animal
{
    public function makeSound()
    {
        // Default method
        echo "The animal makes a sound.\n";
    }
}

// Child classes inheriting from Animal
class Dog extends Animal
{
    public function makeSound()
    {
        echo "The dog barks.\n";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "The cat meows.\n";
    }
}


// Usage
$animal = new Animal();
$animal->makeSound();  // Output: The animal makes a sound.

$dog = new Dog();
$dog->makeSound();  // Output: The dog barks.

$cat = new Cat();
$cat->makeSound();  // Output: The cat meows.
