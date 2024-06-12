<?php
$fruits = [
    "Apple" => "Red",
    "Banana" => "Yellow",
    "Orange" => "Orange",
    "Grapes" => "Green",
    "Strawberry" => "Red"
];

$vegetables = [
    "Carrot" => "Orange",
    "Lettuce" => "Green",
    "Tomato" => "Red",
    "Broccoli" => "Green",
    "Beetroot" => "Red"
];

echo "Fruits (using foreach loop):<br>";
foreach ($fruits as $fruit => $color) {
    echo "$fruit: $color<br>";
}

echo "<br>Vegetables (using foreach loop):<br>";
foreach ($vegetables as $vegetable => $color) {
    echo "$vegetable: $color<br>";
}

echo "<br>Fruits (using array_keys and array_values):<br>";
$fruitNames = array_keys($fruits);
$fruitColors = array_values($fruits);
for ($i = 0; $i < count($fruitNames); $i++) {
    echo "$fruitNames[$i]: $fruitColors[$i]<br>";
}

echo "<br>Vegetables (using array_keys and array_values):<br>";
$vegetableNames = array_keys($vegetables);
$vegetableColors = array_values($vegetables);
for ($i = 0; $i < count($vegetableNames); $i++) {
    echo "$vegetableNames[$i]: $vegetableColors[$i]<br>";
}

echo "<br>Fruits (using array_map):<br>";
$fruitColorsUppercase = array_map('strtoupper', $fruits);
foreach ($fruitColorsUppercase as $fruit => $color) {
    echo "$fruit: $color<br>";
}

echo "<br>Vegetables (using array_map):<br>";
$vegetableColorsUppercase = array_map('strtoupper', $vegetables);
foreach ($vegetableColorsUppercase as $vegetable => $color) {
    echo "$vegetable: $color<br>";
}

echo "<br>Fruits (using array_merge):<br>";
$allProduce = array_merge($fruits, $vegetables);
foreach ($allProduce as $item => $color) {
    echo "$item: $color<br>";
}

echo "<br>Vegetables (using array_merge):<br>";
$allProduceReversed = array_merge($vegetables, $fruits);
foreach ($allProduceReversed as $item => $color) {
    echo "$item: $color<br>";
}