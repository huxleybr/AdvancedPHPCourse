<?php

include_once ("Animal_abstract.php");

class Dog extends Animal {
    //tail
    private $tail = 1;
    
    function getTail() {
        return $this->tail;
    }

    function setTail($tail) {
        $this->tail = $tail;
    }
    //legs
    private $legs = 5;
    
    function getLegs() {
        return $this->legs;
    }

    function setLegs($legs) {
        $this->legs = $legs;
    }
    
    public function speak() {
        return "I am a dog, I have " . $this->getTail() . " tail and I have " . $this->getLegs() . " legs and my name is " .$this->getName();
    
        
    }
}
