<?php

include_once("Order_abstract.php");

class SpecialOrder extends Order{

    protected function dispatch() {
        echo "<p>Special Order $this->orderNumber created on $this->orderDate has been dispatched</p>";            
    }

    protected function receive() {
        echo "<p>Special Order $this->orderNumber created on $this->orderDate has been received</p>";           
    }
}
