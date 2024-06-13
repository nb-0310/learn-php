<?php
abstract class Animal {
    abstract public function makeSound();

    public function sleep() {
        return "Sleeping";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$animals = [new Dog(), new Cat()];

foreach ($animals as $animal) {
    echo "Animal Sound: " . $animal->makeSound() . "<br>";
    echo "Animal Activity: " . $animal->sleep() . "<br>";
}