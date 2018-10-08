<?php

include_once("NormalOrder_class.php");
include_once("SpecialOrder_class.php");
include_once("Customer_class.php");

echo "<h2>Normal Order for Customer 1</h2><hr/>";

$cust1 = new Customer();

$cust1->setName("Olu Akins");
$cust1->setLocation("London");

$cust1_order = new NormalOrder();

//send and recieve
$cust1->sendOrder($cust1_order);
$cust1->receiveOrder($cust1_order);

echo "<h2>Special Order for Customer 2</h2><hr/>";

$cust2 = new Customer();

$cust2->setName("Mark Brown");
$cust2->setLocation("Manchester");

$cust2_order = new SpecialOrder();

//send and recieve
$cust2->sendOrder($cust2_order);
$cust2->receiveOrder($cust2_order);

