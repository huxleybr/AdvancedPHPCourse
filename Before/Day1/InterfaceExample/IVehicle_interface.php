<?php


interface IVehicle {
    //an interface cannot include properties
    //private $colour;
    
    //interface cannot contain method
    //public function display() {
        
    //}
    
    
    //all methods in an interface are public and abstract so all below are correct  
    //no need for public keyword
    public function getName(); //public function not necessary
    function setName($name);
    function drive();
}
