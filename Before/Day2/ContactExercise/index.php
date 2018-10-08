<?php

include_once("Contact_class.php");

echo "<h2>Contact</h2><hr/>";


$contact = new Contact("Luke Rolls");


$contact->setPhoneNumber("07525777417");

$contact->display();



include_once("BusinessContact_class.php");


echo "<h2>Business Contact</h2><hr/>";


$BusinessContact = new BusinessContact("Luke Rolls", "Web Developer");


$BusinessContact->setCompanyName("Dragon Training");
$BusinessContact->setPhoneNumber("07525777417");


$BusinessContact->display();
