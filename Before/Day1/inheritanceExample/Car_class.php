<?php

include_once ("vehicle.class.php");

//Below Vehicle is the super or Base or Parent class
// and Car is the Sub or Derived or child class
class Car extends Vehicle {
    
    private $number_of_doors = 4;
    
    function getNumber_of_doors() {
        return $this->number_of_doors;
    }

    function setNumber_of_doors($number_of_doors) {
        $this->number_of_doors = $number_of_doors;
    }

    
    public function drive() {
        echo "This is a car that is driving";
        
        return parent::drive();
    }

}
