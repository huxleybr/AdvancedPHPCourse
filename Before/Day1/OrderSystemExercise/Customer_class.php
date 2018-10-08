<?php

include_once("Order_abstract.php");

class Customer {
    
    private $name;
    private $location;
    
    function setName($name) {
        $this->name = $name;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    public function sendOrder(Order $ord){
        echo "<p>Customer order details for $this->name is sent to the location $this->location</p>";    
        $ord->confirm();
    }

    public function receiveOrder(Order $ord){
        echo "<p>Customer order details for $this->name has been received</p>";    
        $ord->close();
    }

}
