<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1>For Loop</h1>

    <?php
    $numbers = [1, 2, 3, 4, 5];

    for ($i = 0; $i < count($numbers); $i++) {
        echo "Number: " . $numbers[$i] . "<br>";
    }
    ?>

    <h1>While Loop</h1>

    <?php
    $i = 0;
    $numbers = [1, 2, 3, 4, 5];

    while ($i < count($numbers)) {
        echo "Number: " . $numbers[$i] . "<br>";
        $i++;
    }
    ?>

    <h1>Foreach Loop</h1>

    <?php
    $fruits = ["Apple", "Banana", "Orange", "Grapes", "Strawberry"];

    foreach ($fruits as $fruit) {
        echo "Fruit: " . $fruit . "<br>";
    }
    ?>

    <h1>Nested Loops</h1>

    <?php
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo "Element [$i][$j] = " . $matrix[$i][$j] . "<br>";
        }
    }
    ?>

    <h1>Break and Continue</h1>

    <?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    echo "Using Break:<br>";
    foreach ($numbers as $number) {
        if ($number == 5) {
            break;
        }
        echo "Number: " . $number . "<br>";
    }

    echo "<br>Using Continue:<br>";
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            continue;
        }
        echo "Number: " . $number . "<br>";
    }
    ?>

</body>

</html>