<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
$numbers = [1,44,55,22];
$fruits = array("apple", "orange", "pear");

// print_r($numbers);
// echo "<br/>";
// var_dump($numbers);

// Associative array

$colors = [
  1 => "red",
  2=> "blue",
  4 => "green",
];

$hex = [
  "red" => "#f00",
  "blue" => "#0f0",
];

echo $hex["blue"];


// $person = [
//   "first_name" => "Asim",
//   "last_name" => "Ditta",
//   "email" => "asim@gmail.com",
// ];

// echo $person["first_name"];

$person = [
  [
  "first_name" => "Asim",
  "last_name" => "Ditta",
  "email" => "asim@gmail.com" 
  ],
  [
    "first_name" => "Misa",
    "last_name" => "Amsi",
    "email" => "misa@gmail.com" 
  ],
];

// echo $person[1]["email"];

var_dump((json_encode($person)));