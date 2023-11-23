<?php

namespace Classes;
// use final keyword to stop any child classes overriding or extending this class
class Toaster extends AbstractProduct {
    protected int $slots;

    public function __construct()
    {
        $this->turnOn();
        $this->slots = 2;
    }

    public function toast(){
        echo "Toasting {$this->slots} bread";
    }

    public function setup()
    {
        echo "setting up";
    }
}