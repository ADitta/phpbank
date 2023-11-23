<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// for($x = 0; $x <= 10; $x++){
//   echo $x + 1 . '<br>';
// }

// $posts = ["first", "second", "third"];

// for($x=0; $x < count($posts); $x++){
//   echo $posts[$x];
// }

// foreach($posts as $index => $post){
//   echo $index . ' - ' . $post . '<br>';
// }

$person = [
  "first_name" => "Asim",
  "last_name" => "Ditta",
  "email" => "asim@gmail.com",
];

foreach($person as $key => $value){
  echo "$key - $value<br>";
}