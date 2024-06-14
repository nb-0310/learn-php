<?php
require 'vendor/autoload.php';

use Acme\Task;
use Acme\Person\Person;

use Acme\Dog;
use Acme\Cat;

$task = new Task("Learn OOP", "Learn OOPS in PHP");
var_dump($task->description);
var_dump($task->title);

$person = new Person("John Doe", 30);
echo $person->greet();

$dog = new Dog("Buddy", 3);
echo $dog->getDetails(); 
echo "\n";
echo $dog->makeSound(); 

echo "\n";

$cat = new Cat("Whiskers", 2);
echo $cat->getDetails();
echo "\n";
echo $cat->makeSound(); 