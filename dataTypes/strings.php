<?php
$greeting = "Hello, World!";
$name = 'Nirzar Bhatt';

echo $greeting . "<br>";
echo "Name: " . $name . "<br>";

$multilineString = 'This is a
multiline
string.';

echo nl2br($multilineString) . "<br>";

$escapedString = "He said, \"PHP is awesome!\"";
echo $escapedString . "<br>";

$length = strlen($greeting);
echo "Length of greeting: " . $length . "<br>";

$upperCase = strtoupper($name);
echo "Uppercase Name: " . $upperCase . "<br>";

$lowerCase = strtolower($greeting);
echo "Lowercase Greeting: " . $lowerCase . "<br>";

$position = strpos($greeting, "World");
echo "Position of 'World' in greeting: " . $position . "<br>";

$replaced = str_replace("World", "PHP", $greeting);
echo "Replaced Greeting: " . $replaced . "<br>";