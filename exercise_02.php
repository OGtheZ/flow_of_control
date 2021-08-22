<?php

$number = (int) readline('Enter the number: ');

if ($number < 0)
{
    echo "Negative" . PHP_EOL;
}
else
{
    echo "Positive" . PHP_EOL;
}