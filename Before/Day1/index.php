<?php

include_once("vehicle.class.php");

//single

/*
 * multi-line
 */
echo "<h2>Vehicle Instance...</h2><hr/>";
//create an instance of the class
$veh = new Vehicle();



//$veh3 = new Vehicle();

//cahnge the colour to blue
//$veh->colour ="Blue";

//cahnge the colour to blue
$veh->setColour ("Blue");

//set the name to toyota
$veh->setName("Toyota");

//display the drive
echo "<p>" . $veh->drive() . "</p>";


//create another instance of vehicle and set colour to black and name to Mazada and call the drive method

echo "<h2>Another Vehicle Instance...</h2><hr/>";

$veh2 = new Vehicle();

//cahnge the colour to blue
$veh2->setColour ("Black");

//set the name to toyota
$veh2->setName("Mazda");

//display the drive vehicle 2
echo "<p>" . $veh2->drive() . "</p>";

$veh3 = new Vehicle();

//display number of vehicles created
echo "<p>The number of vehicle(s) created is " . Vehicle::$vehicleObjectsCreated;