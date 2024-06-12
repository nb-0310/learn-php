<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Normal Function</h1>

    <?php
    function greeting()
    {
        echo "Hello";
    }

    greeting();
    ?>

    <h1>Function with Params</h1>

    <?php
    function greeting2($name, $message)
    {
        echo "Hello $name, $message";
    }

    greeting2("Nirzar", "nice to meet you");
    ?>

    <h1>Function with Returns</h1>

    <?php
    function greeting3($name, $message)
    {
        return "Hello $name, $message";
    }

    echo greeting3("Nirzar", "nice to meet you");
    ?>

    <h1>Anonymous Function Example</h1>

    <?php
    $multiply = function ($a, $b) {
        return $a * $b;
    };

    echo "5 * 3 = " . $multiply(5, 3);
    ?>

    <h1>Arrow Function Example</h1>

    <?php
    $multiply = fn($a, $b) => $a * $b;

    echo "5 * 3 = " . $multiply(5, 3);
    ?>
</body>

</html>