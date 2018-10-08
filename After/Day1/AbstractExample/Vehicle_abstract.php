<?php

//An abstract class is a class with keyword abstract
//An abstract class cannot be instantiated because
//an abstract can have an abstract method
abstract class Vehicle {
    
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    //An abstract method is a method with the keyword abstract and without a method body
    public abstract function drive();
}
