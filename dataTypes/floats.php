<?php
$float1 = 3.14;
$float2 = 2.71;

$sum = $float1 + $float2;
$difference = $float1 - $float2;
$product = $float1 * $float2;
$quotient = $float1 / $float2;

echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";

$isFloat = is_float($float1);
echo "Is $float1 a float? " . ($isFloat ? 'Yes' : 'No') . "<br>";

$rounded = round($float1);
echo "Rounded value of $float1: " . $rounded . "<br>";

$ceilValue = ceil($float1);
echo "Ceiling value of $float1: " . $ceilValue . "<br>";

$floorValue = floor($float1);
echo "Floor value of $float1: " . $floorValue . "<br>";

$roundedPrecision = round($float1, 1);
echo "Rounded value of $float1 with precision 1: " . $roundedPrecision . "<br>";