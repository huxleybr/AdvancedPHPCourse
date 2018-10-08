<?php

include_once("Animal_class.php");

class Cat extends Animal{

    public function speak(){
        echo "<p>I am a cat</p>";
        
        return parent::speak();
    }
}
