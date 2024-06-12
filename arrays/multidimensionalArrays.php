<?php
$produce = [
    "Fruits" => [
        ["name" => "Apple", "color" => "Red", "price" => 1.5],
        ["name" => "Banana", "color" => "Yellow", "price" => 0.5],
        ["name" => "Orange", "color" => "Orange", "price" => 0.75],
        ["name" => "Grapes", "color" => "Green", "price" => 2.0],
        ["name" => "Strawberry", "color" => "Red", "price" => 2.5]
    ],
    "Vegetables" => [
        ["name" => "Carrot", "color" => "Orange", "price" => 1.0],
        ["name" => "Lettuce", "color" => "Green", "price" => 1.25],
        ["name" => "Tomato", "color" => "Red", "price" => 1.2],
        ["name" => "Broccoli", "color" => "Green", "price" => 1.75],
        ["name" => "Beetroot", "color" => "Red", "price" => 1.5]
    ]
];

echo "Fruits (using nested foreach loop):<br>";
foreach ($produce["Fruits"] as $fruit) {
    echo "Name: " . $fruit["name"] . ", Color: " . $fruit["color"] . ", Price: $" . $fruit["price"] . "<br>";
}

echo "<br>Vegetables (using nested foreach loop):<br>";
foreach ($produce["Vegetables"] as $vegetable) {
    echo "Name: " . $vegetable["name"] . ", Color: " . $vegetable["color"] . ", Price: $" . $vegetable["price"] . "<br>";
}

echo "<br>Produce (using print_r):<br>";
echo "<pre>";
print_r($produce);
echo "</pre>";

echo "<br>Produce (using var_dump):<br>";
echo "<pre>";
var_dump($produce);
echo "</pre>";

echo "<br>Produce (using json_encode):<br>";
echo json_encode($produce) . "<br>";