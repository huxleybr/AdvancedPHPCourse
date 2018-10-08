<?php

include_once("Order_abstract.php");

class NormalOrder extends Order {

    protected function dispatch() {
        echo "<p>Normal Order $this->orderNumber created on $this->orderDate has been dispatched</p>";            
    }

    protected function receive() {
        echo "<p>Normal Order $this->orderNumber created on $this->orderDate has been received</p>";           
    }

}
