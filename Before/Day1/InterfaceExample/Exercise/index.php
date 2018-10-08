<?php

include_once("Animal_abstract.php");

echo "<h2>...Animal Instance...</h2><hr/>";
//create an instance of the class




include_once("Dog_abstract.php");

echo "<h2>...Dog Instance...</h2><hr/>";

$d = New Dog();

$d->setName("Spot");

echo "<p>" . $d->speak() . "</p>";


include_once("Cat_abstract.php");

echo "<h2>...Cat Instance...</h2><hr/>";

$c = New Cat();

$c->setName("Foster");

echo "<p>" . $c->speak() . "</p>";