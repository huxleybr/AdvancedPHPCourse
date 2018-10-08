<?php

//An abstract class is a keyword with keyword abstract
//cannot instatiate because an abstract can have an abstract method

abstract class Vehicle {
    
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    
    //An abstract method is a method with a keyword abstract and without a method body
    public abstract function drive();
}
