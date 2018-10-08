<?php

class Animal {
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    protected function speak(){
        return "I am an animal and my name is " . $this->name;
    }
}
