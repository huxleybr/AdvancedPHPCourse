<?php

include_once ("animal_class.php");

class Dog extends Animal {
    
    private $number_of_legs = 4;

    
    function getNumber_of_legs() {
        return $this->number_of_legs;
    }

    function setNumber_of_legs($number_of_legs) {
        $this->number_of_legs = $number_of_legs;
    }
    
    private $number_of_tails = 1;
    
    
    function getNumber_of_tails() {
        return $this->number_of_tails;
    }

    function setNumber_of_tails($number_of_tails) {
        $this->number_of_tails = $number_of_tails;
    }

    
    public function speak() {
        echo "I am a dog and i have " . $this->number_of_legs ." leg(s) and " . $this->number_of_tails . " tail(s)</p>";
        
        
        return parent::speak();
        
        
    }
}

