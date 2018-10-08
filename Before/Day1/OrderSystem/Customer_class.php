<?php

class Customer {
    
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

        
    private $location;
    
    function getLocation() {
        return $this->location;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    public function sendOrder() {
        
    }
    
    public function recieveOrder() {
        
    }
}
