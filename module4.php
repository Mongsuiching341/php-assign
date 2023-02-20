<?php
/* 
1. Write a PHP function to sort an array of strings by their length, 
in ascending order. (Hint: You can use the usort() 
function to define a custom sorting function.)
*/
$array = array('the', 'quick', 'brown', 'fox', 'jumps', 'over', 'the', 'lazy', 'dog');

function sortBylength($array)
{
    usort($array, function ($a, $b) {
        return  strlen($a) - strlen($b);
    });

    return $array;
}

print_r(sortBylength($array));

echo PHP_EOL;

/*
2.Write a PHP function to concatenate two strings,
 but with the second string starting from the end of the first string.
*/
function concat($strOne, $strTwo)
{
    //the second string starting from the end of the first string.
    return $strOne . ' ' . $strTwo;
}

$firstStr = 'Hello';
$secondStr = 'world';

echo concat($firstStr, $secondStr);

/* 
3.Write a PHP function to remove the first and last 
element from an array and return the remaining elements
 as a new array.
*/
echo PHP_EOL;

function removeFirstLastEl($array)
{
    //removing 1st element
    array_shift($array);
    //removing last element
    array_pop($array);

    return $array;
}

$wow = array('mango', 'banana', 'apple', 'pineapple');

print_r(removeFirstLastEl($wow));

echo PHP_EOL;

// 4.Write a PHP function to check if a string contains only letters and whitespace.

function checkLetterWhiteSpace($string)
{
    return preg_match('/^[A-Za-z\s]+$/', $string) === 1;
}

$string1 = 'hello world';
$string2 = 'hello22222';

var_dump(checkLetterWhiteSpace($string1));

echo PHP_EOL;
// 5.Write a PHP function to find the second largest number in an array of numbers.

function getSecondLargestNum($array)
{
    rsort($array);
    return $array[1];
}
$nums = [2, 4, 5, 10, 9];

echo getSecondLargestNum($nums);
