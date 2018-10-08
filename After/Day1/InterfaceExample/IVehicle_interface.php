<?php

//An interface is a contract binding all classes to it
//you cannot instantiate an interface
interface IVehicle {
    //an interface cannot include properties
    //private $colour;
    
    //interface cannot contain methods
//    public function display(){
//        
//    }
    
  
    //all methods in an interface are public and abstract but do not use abstract keyword
    //so all below are correct but no need for public keyword
    public function getName(); //public not necessary
    function setName($name);
    function drive();
    
    
}
