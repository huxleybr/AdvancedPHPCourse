<?php

abstract class Order {
    
    private static $orderCount = 1;
    
    protected $orderNumber;
    protected $orderDate;
    
    public function __construct() {
        //set the order number
        $this->orderNumber = self::$orderCount;
        
        //set the date order was created
        $this->orderDate = date("d/M/Y h:m:s");
        
        //increment the ordercount by 1
        self::$orderCount++;
    }
    
    public final function confirm(){
        echo "<p>Order $this->orderNumber created on $this->orderDate is confirmed</p>";
        $this->dispatch();
    }
    
    public final function close(){
        $this->receive();
        echo "<p>Order $this->orderNumber created on $this->orderDate is closed</p>";        
    }
    
    protected abstract function dispatch();
    protected abstract function receive();
}
