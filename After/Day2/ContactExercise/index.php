<?php

include_once("Contact_class.php");
include_once("BusinessContact_class.php");

echo "<h2>Contact details</h2><hr/>";

$cont = new Contact("Olu Akins");
$cont->setPhoneNumber("07989896776");

$cont->display();

echo "<h2>Business Contact details</h2><hr/>";

$bcont = new BusinessContact("Mark Brown", "IT Support");
$bcont->setPhoneNumber("07867543423");
$bcont->setCompanyName("Training Dragon");

$bcont->display();