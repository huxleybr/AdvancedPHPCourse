<?php

include_once ("IAnimal_interface.php");

abstract class Animal implements IAnimal {
    
    private $name;
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    
    public abstract function speak(); 
}
