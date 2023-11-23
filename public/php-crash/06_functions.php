<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
$y = 12;
function registerUser($email){
  // global $y;
  // echo $y;
  echo "$email registered";
}

registerUser("a@gmail.com");

$multiply = fn($n1, $n2) =>  $n1 * $n2;

$subtract = function($n1, $n2) {
  return $n1 - $n2;
};