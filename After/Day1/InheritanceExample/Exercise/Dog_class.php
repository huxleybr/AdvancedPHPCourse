<?php

include_once("Animal_class.php");

class Dog extends Animal {
    
    private $tail;
    private $legs;
    
    function getTail() {
        return $this->tail;
    }

    function getLegs() {
        return $this->legs;
    }

    function setTail($tail) {
        $this->tail = $tail;
    }

    function setLegs($legs) {
        $this->legs = $legs;
    }

    public function speak(){
        echo "<p>I am a dog and I have " . $this->legs . " leg(s) and " . $this->tail . " tail(s)</p>";
        
        return parent::speak();
    }
}
