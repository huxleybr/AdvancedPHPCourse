<?php

include_once("Vehicle_abstract.php");

class Car extends Vehicle {
    
    public function drive() {
        return "This is a car and it is called " . $this->getName();
    }
}
