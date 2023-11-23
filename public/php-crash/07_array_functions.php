<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ["apple", "orange", "pear"];

// get length
echo count($fruits);

// Search array
var_dump(in_array("apple", $fruits));

// Add to array
$fruits[] = "grape";
array_push($fruits, "mango", "strawberry");
array_unshift($fruits, "pineapple");
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// Split into chunks of two

$chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr3);

// COMBINES THE TWO ARRAYS, FIRST ONE IS THE KEY AND SECOND IS THE VALUE
$a = ["green", "red", "yellow"];
$b = ["cade", "babana", "apple"];
$c = array_combine($a,$b);
// print_r($c);

$keys = array_keys($c);

// print_r($keys);

// FLIPS KEYS AND VALUES AROUND
$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number){
  return "Number $number";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number)=> $number <=10);
print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);
var_dump($sum);