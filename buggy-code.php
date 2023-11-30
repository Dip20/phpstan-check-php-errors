<?php

function calculateSum(int $a,  int $b): int
{
    return $a + $b;
}

$number1 = 5;
$number2 = 10;

$result = calculateSum($number1, $number2);

echo "The sum of $number1 and $number2 is: $result\n";

// Undefined variable
$undefinedVariable = '';
echo $undefinedVariable;

// Unused variable
$unusedVariable = 'This variable is not used.';

// Incorrect function call
$result = calculateSum($number1, 'string');

// Division by zero
$divisionResult = 10 / 0;

// Accessing undefined array key
$sampleArray = ['key1' => 'value1', 'key2' => 'value2'];
$undefinedKey = $sampleArray['key3'];

// Object method call on a non-object
$nonObject = 'This is not an object.';
$length = $nonObject->length();

// Type mismatch in comparison
if ($number1 === '5') {
    echo "Number 1 is a string.\n";
}
