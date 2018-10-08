<?php


class Contact {
    
    protected $name;
    
    protected $phoneNumber;
    

    function getPhoneNumber() {
        return $this->phoneNumber;
    }


    function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function __construct($name) {
        
        $this->name = $name;

        
    }
    
    public function display() {
        
        echo "<p>Contact name $this->name <br />mobile number is $this->phoneNumber </p>";

        
    }
}
