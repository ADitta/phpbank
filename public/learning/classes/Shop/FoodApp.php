<?php

namespace Classes\Shop;

 class FoodApp 
{
    public function __construct(RestaurantInterface $restaurant)
    {
        $restaurant->prepareFood();
    }
}
