<?php

class Animal {
    
    private $name = "Max";
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

        
    public function speak() {
        return "I am an animal " . $this->name . "</p>";
    }
}

