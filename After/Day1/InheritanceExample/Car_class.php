<?php

include_once("vehicle.class.php");

//Below Vehicle is the Super or Base or Parent class
//and Car is the Sub or Derived or Child class
class Car extends Vehicle {
    
    private $num_of_doors = 4;
    
    function getNum_of_doors() {
        return $this->num_of_doors;
    }

    function setNum_of_doors($num_of_doors) {
        $this->num_of_doors = $num_of_doors;
    }

    public function drive(){
        echo "<p>This is a car that is driving</p>";
        
        return parent::drive();
    }
}
