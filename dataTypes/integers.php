<?php
$int1 = 42;
$int2 = -17;
$sum = $int1 + $int2;
$difference = $int1 - $int2;
$product = $int1 * $int2;
$quotient = $int1 / $int2;
$remainder = $int1 % $int2;

echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";

$isInteger = is_int($int1);
echo "Is $int1 an integer? " . ($isInteger ? 'Yes' : 'No') . "<br>";