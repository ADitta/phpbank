<?php

// require_once "./classes/Account.php";
// require_once "./classes/SocialMedia.php"

spl_autoload_register(function($class){
    // var_dump($class);
    $formattedClass = str_replace("\\", "/", $class);
    require_once("{$formattedClass}.php");
});

use Classes\{Account, SocialMedia, Utility, Toaster, ToasterPremium, AbstractProduct};


$myAccount = new Account("Asim", 500);
$myNewAccount = new Account("AsimSavings", 800);
$MyToaster = new ToasterPremium(3);

$MyToaster->toast();

// var_dump($myAccount);
// echo "<br>";
// var_dump($myNewAccount,Account::INTEREST_RATE);
// $myAccount->depositBalance(400)->depositBalance(700);
// $myAccount->addCount(5);
// How to add to a static variable
// $myNewAccount->addCount(6);
// var_dump(Account::$count);
var_dump(Utility::printArr([1,2,3]));
// print_r(get_class_methods($myAccount)); 