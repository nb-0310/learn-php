<?php
$name = "Nirzar Bhatt";
$age = 23;
$height = 5.9;
$isStudent = true;

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($isStudent ? 'Yes' : 'No') . "<br>";

$name = "John Doe";
$age = 25;
$height = 5.5;
$isStudent = false;

echo "<br>Re-assigned Variables:<br>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($isStudent ? 'Yes' : 'No') . "<br>";

$variableName = "greeting";
$$variableName = "Hello, World!";

echo "<br>Variable Variable:<br>";
echo "Greeting: " . $greeting . "<br>";