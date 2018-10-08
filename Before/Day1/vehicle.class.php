<?php

class Vehicle {
    
    private $colour = "Red";
    
    private $name = "unknown";
    
    //public static $counter = 0;
    
    public static $vehicleObjectsCreated = 0;
    
    //first way but improper way of creating a constructuor
    public function Vehicle() {
        echo "<p>Constructor called {use__construct instead}</p>";
    }
    
    /*
    function __construct() {
        self::$counter++;
    }
     */
    
    //2nd and proper way to create a constructor
    public function __construct() {
        echo "<p>Proper Constructor called</p>";
        
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
        $local_variable = "Testing"; 
        
        return "Vehicle called " . $this->name . " is driving with colour " . $this->colour;
    }
    
    public function __destruct() {
        echo "<p>Destructor called for " . $this->name . "</p>";
        
        //incremented object created
        self::$vehicleObjectsCreated++;
    }
    
}