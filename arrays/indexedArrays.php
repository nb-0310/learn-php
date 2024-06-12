<?php
$languages = array("Javascript", "PHP", "Typescript", "Python", "Solidity", "Rust", "Go");
$numbers = [21, 22, 23, 24, 25, 26, 27, 28, 29, 30];

$languagesUpperCase = array_map('strtoupper', $languages);

$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

$oddNumbers = array_filter($numbers, function($num) {
    return $num % 2 != 0;
});

$sum = array_reduce($numbers, function($carry, $num) {
    return $carry + $num;
});

echo "Programming Languages:<br>";
foreach ($languages as $lang) {
    echo "$lang<br>";
}

echo "<br>Programming Languages in Uppercase:<br>";
foreach ($languagesUpperCase as $lang) {
    echo "$lang<br>";
}

echo "<br>Even Numbers:<br>";
foreach ($evenNumbers as $num) {
    echo "Number: $num<br>";
}

echo "<br>Odd Numbers:<br>";
foreach ($oddNumbers as $num) {
    echo "Number: $num<br>";
}

echo "<br>Sum of Numbers: $sum<br>";

echo "<pre>";
print_r($languages);
echo "</pre>";

echo "<pre>";
var_dump($languages);
echo "</pre>";

echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "<pre>";
var_dump($numbers);
echo "</pre>";

echo implode(", ", $languages) . "<br>";

echo implode(", ", $numbers) . "<br>";