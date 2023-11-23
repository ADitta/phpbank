<?php

declare(strict_types=1);

namespace Classes;
use DateTime as DT;
new DT();

class Account
{
    public SocialMedia $socialMedia;
    public const INTEREST_RATE = 2;
    // properties/variables
    // public is the access modifier
    public string $name;
    public float $balance;
    // THESE VARIABLES ARENT DELETED ONCE THE FUNCTION HAS BEEN CALLED
    public static int $count = 0;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
        $this->socialMedia = new SocialMedia();
    }

    public function getName(){
        return $this->name;
    }
    
    public function depositBalance(int $amount){
        $this->balance += $amount;
        echo "New balance is now: {$this->balance}";
        return $this;
    }

    public function addCount(int $num){
        // We need self as it points to the class rather than an instance and this is used to update the static variable
        self::$count += $num;
        echo self::$count;
    }
}
