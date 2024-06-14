<?php
namespace Acme;

abstract class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function makeSound();

    public function getDetails() {
        return "This is a {$this->name}, and it is {$this->age} years old.";
    }
}
