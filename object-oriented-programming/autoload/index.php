<?php
require 'vendor/autoload.php';

use Acme\Task;
use Acme\Person\Person;

$task = new Task("Learn OOP", "Learn OOPS in PHP");
var_dump($task->description);
var_dump($task->title);

$person = new Person("John Doe", 30);
echo $person->greet();
