<?php

$n = 3;

// Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function checkEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

if (checkEven($n)) {
    echo 'even number';
} else {
    echo 'odd number';
}

// =========================
//1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;