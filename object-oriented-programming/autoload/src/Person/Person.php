<?php
namespace Acme\Person;

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        return "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}
