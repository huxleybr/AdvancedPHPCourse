<?php

class Order {
     private $orderDate;
     
     function getOrderDate() {
         return $this->orderDate;
     }

     function setOrderDate($orderDate) {
         $this->orderDate = $orderDate;
     }

          
     private $orderNumber;
     
     function getOrderNumber() {
         return $this->orderNumber;
     }

     function setOrderNumber($orderNumber) {
         $this->orderNumber = $orderNumber;
     }

     public function confirm() {
        
    }
    
    public function close() {
        
    }
}
