<?php
namespace Classes;
class ToasterPremium extends Toaster{
    // Property can be modified from child or parent class with protected keyword
    // protected int $slots;
    private int $duration ;

    public function __construct(int $newDuration)
    {
        parent::__construct();
        $this->slots = 4;
        $this->duration = $newDuration;
    }

    public function toast(){
        parent::toast();
        echo " for {$this->duration} minutes.";
    }

    
}