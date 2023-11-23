<?php

namespace Classes\Shop;

class RestaurantOne implements RestaurantInterface{
    
    public function __construct() {
        // $this->prepareFood();
    }

    public function prepareFood()
    {
        echo "preparing food";
    }

}

