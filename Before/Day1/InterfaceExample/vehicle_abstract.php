<?php

include_once ("IVehicle_interface.php");

abstract class vehicle implements IVehicle {
    
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    
}
