<?php

use Classes\Shop\RestaurantInterface;

 class RestaurantTwo implements RestaurantInterface
{
    public function prepareFood()
    {
        echo "preparing other food";
    }
}
