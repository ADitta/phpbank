<?php

namespace Classes;

abstract class AbstractProduct {

    public function turnOn(){
        echo "turning on product <br>";
    }

    abstract public function setup();
}