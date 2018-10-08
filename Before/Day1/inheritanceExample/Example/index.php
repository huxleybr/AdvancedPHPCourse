<?php

include_once("dog_class.php");

$do = new Dog();

echo "<p>" . $do->speak() . "</p>";

include_once ("cat_class.php");

$ca = new Cat();

echo "<p>" . $ca->speak() . "</p>";