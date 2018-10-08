<?php

include_once("Dog_class.php");
include_once("Cat_class.php");

echo "<h2>...Dog instance...</h2><hr/>";

//create instance of dog
$dg = new Dog();
$dg->setName("Bingo");
$dg->setLegs(4);
$dg->setTail(1);

echo "<p>" . $dg->speak() . "</p>";

echo "<h2>...Cat instance...</h2><hr/>";

//create instance of cat
$ct = new Cat();
$ct->setName("Whiskey");

echo "<p>" . $ct->speak() . "</p>";

