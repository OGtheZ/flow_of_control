<?php

$amount = (int) readline('Enter amount for numbers');

$numbers = [];

for ($i = 0; $i < $amount; $i++)
{
    $number = (int) readline('Enter the number: ');
    $numbers[] = $number;
}
$largestNumber = max($numbers);
$numbersList = implode(', ', $numbers); // explode = string to array;

echo "The largest number from $numbersList is $largestNumber.";