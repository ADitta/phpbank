<?php

// require_once "./classes/Account.php";
// require_once "./classes/SocialMedia.php"

spl_autoload_register(function($class){
    // var_dump($class);
    $formattedClass = str_replace("\\", "/", $class);
    require_once("{$formattedClass}.php");
});

use Classes\{Account, SocialMedia, Utility, Toaster, ToasterPremium,};
use Classes\Shop\{RestaurantOne, RestaurantTwo ,FoodApp, RestaurantInterface};

$restaurant = new RestaurantOne();
$foodApp = new FoodApp($restaurant);
$newRestaurant = new FoodApp(new class("Popup restaurant") implements RestaurantInterface {

    public function __construct(public string $name)
    {
        
    }
    public function prepareFood()
    {
        echo "{$this->name} restaurant food making";
    }

});