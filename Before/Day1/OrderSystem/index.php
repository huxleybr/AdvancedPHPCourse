<?php

include_once("order_class.php");

//single

echo "<h2>...Order Instance...</h2><hr/>";
//create an instance of the class
//$veh = new Vehicle();

echo "<p>You cannot instantiate an abstract class</p>";

include_once("customer_class.php");

echo "<h2>...Customer Instance...</h2><hr/>";

$cr = New Car();

$cr->setName("Toyota");

echo "<p>" . $cr->drive() . "</p>";

include_once("customer_class.php");

echo "<h2>...Order Instance...</h2><hr/>";


include_once("customer_class.php");

echo "<h2>...Order Instance...</h2><hr/>";


