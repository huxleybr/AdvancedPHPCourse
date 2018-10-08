<?php

class Contact {
    private $name;
    private $phoneNumber;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }
    
    public function display(){
        echo "<p>Contact name is $this->name and the phone number is $this->phoneNumber";
    }
}
