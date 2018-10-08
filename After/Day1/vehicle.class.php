<?php

class Vehicle {
    
    //instance variable
    private $colour = "Red";
    private $name = "Unknown";
    
    public static $vehicleObjectsCreated = 0;
  
    //1st way but improper way of creating a constructor
    public function Vehicle(){
        echo "<p>Constructor called {use __construct instead}</p>";
    }
    
    //2nd and proper way to create a constructor
    public function __construct(){
        echo "<p>Proper Constructor called</p>";
        
        //increment objectcreated
        self::$vehicleObjectsCreated++;
    }
    
    public function getColour() {
        return $this->colour; 
    }

    public function setColour($colour) {
        $this->colour = $colour;
    }
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
   
    public function drive() {
        $local_variable = "Testing"; //local variable
        
        return "Vehicle called " . $this->name . " is driving with colour " . $this->colour;
    }
    
    //destructor below
    public function __destruct() {
        echo "<p>Destructor called for " . $this->name . "</p>";
    }
}

