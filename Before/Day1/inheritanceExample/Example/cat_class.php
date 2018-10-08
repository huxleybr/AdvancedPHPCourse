<?php

include_once ("animal_class.php");


class Cat extends Animal {
    
    public function speak() {
    echo "I am a cat called ";
    
    return parent::speak();
    }
}

