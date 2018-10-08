<?php

include_once("vehicle_abstract.php");

//single

echo "<h2>...Vehicle Instance...</h2><hr/>";
//create an instance of the class
//$veh = new Vehicle();

echo "<p>You cannot instantiate an abstract class</p>";

include_once("Car_class.php");

echo "<h2>...Car Instance...</h2><hr/>";

$cr = New Car();

$cr->setName("Toyota");

echo "<p>" . $cr->drive() . "</p>";
