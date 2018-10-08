<?php


class ContactModel {
    
    public function display() {
        include_once("helper/Contact_class.php");
        include_once("helper/BusinessContact_class.php");

        echo "<h2>Contact</h2><hr/>";


        $contact = new Contact("Luke Rolls");


        $contact->setPhoneNumber("07525777417");

        $contact->display();
    }
}
