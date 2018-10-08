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
echo "<p>" . $veh->drive() . "</p>";


//create another instance of vehicle and set the colour to black and name to Mazda and call the drive method

echo "<h2>...Another vehicle instance...</h2><hr/>";

$veh2 = new Vehicle();

$veh2->setName("Mazda");
$veh2->setColour("Black");

echo "<p>" . $veh2->drive() . "</p>";

$veh3 = new Vehicle();

echo "<p>The number of vehicle(s) created is " . Vehicle::$vehicleObjectsCreated . "</p>";

