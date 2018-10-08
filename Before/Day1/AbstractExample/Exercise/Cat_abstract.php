<?php

include_once ("Animal_abstract.php");

class Cat extends Animal {
    
    public function speak() {
        return "I am a called " . $this->getName();
    
    }
}
