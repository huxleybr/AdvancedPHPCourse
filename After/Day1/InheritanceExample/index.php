<?php

include_once("vehicle.class.php");

//single-line comment

/* multi-line 
 * comment
 */

echo "<h2>...Vehicle instance...</h2><hr/>";
//create an instance of the class
$veh = new Vehicle();

//change the colour to blue
//$veh->colour = "Blue";

$veh->setColour("Blue");

//set the name to Toyota
$veh->setName("Toyota"); 

//display the drive
//echo "<p>" . $veh->drive() . "</p>";

echo "<h2>...Car instance...</h2><hr/>";
include_once("Car_class.php");

$cr = new Car();
$cr->setName("Toyota Camry");
$cr->setColour("White");
$cr->setNum_of_doors(3);

echo "<p>" . $cr->drive() . "</p>";

echo "<p>The number of vehicle(s) created is " . Vehicle::$vehicleObjectsCreated . "</p>";

