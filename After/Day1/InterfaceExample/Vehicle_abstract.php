<?php

include_once("IVehicle_interface.php");

abstract class Vehicle implements IVehicle {

    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    //An abstract method is a method with the keyword abstract and without a method body
    //public abstract function drive(); 
//method above not needed since the interface will throw the error to the child class and request the Car to write this method

}
