<?php
$trueValue = true;
$falseValue = false;

echo "True Value: " . ($trueValue ? 'True' : 'False') . "<br>";
echo "False Value: " . ($falseValue ? 'True' : 'False') . "<br>";

$isBool1 = is_bool($trueValue);
$isBool2 = is_bool($falseValue);
echo "Is \$trueValue a boolean? " . ($isBool1 ? 'Yes' : 'No') . "<br>";
echo "Is \$falseValue a boolean? " . ($isBool2 ? 'Yes' : 'No') . "<br>";

$result = $trueValue && $falseValue;
echo "Result of true AND false: " . ($result ? 'True' : 'False') . "<br>";

$result = $trueValue || $falseValue;
echo "Result of true OR false: " . ($result ? 'True' : 'False') . "<br>";