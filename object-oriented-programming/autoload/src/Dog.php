<?php
namespace Acme;

class Dog implements SoundInterface {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function makeSound() {
        return "Woof!";
    }

    public function getDetails() {
        return "This is a {$this->name}, and it is {$this->age} years old.";
    }
}
