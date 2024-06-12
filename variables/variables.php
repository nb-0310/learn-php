<?php
$name = "Nirzar Bhatt";
$age = 23;
$height = 5.9;
$isStudent = false;

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Height: " . $height . "\n";
echo "Is Student: " . ($isStudent ? 'Yes' : 'No') . "\n";

$name = "John Doe";
$age = 20;
$height = 5.5;
$isStudent = true;

echo "\nRe-assigned Variables:\n";
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Height: " . $height . "\n";
echo "Is Student: " . ($isStudent ? 'Yes' : 'No') . "\n";

$variableName = "greeting";
$$variableName = "Hello, World!";

echo "\nVariable Variable:\n";
echo "Greeting: " . $greeting . "\n";