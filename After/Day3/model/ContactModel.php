<?php

class ContactModel {
    
    public function display(){
        include_once("Helper/Contact_class.php");
        include_once("Helper/BusinessContact_class.php");

        echo "<h2 class='text-center text-uppercase text-secondary mb-0'>Contact details</h2><hr class='star-dark mb-5'/>";

        $cont = new Contact("Olu Akins");
        $cont->setPhoneNumber("07989896776");

        $cont->display();

        echo "<h2 class='text-center text-uppercase text-secondary mb-0'>Business Contact details</h2><hr class='star-dark mb-5'/>";

        $bcont = new BusinessContact("Mark Brown", "IT Support");
        $bcont->setPhoneNumber("07867543423");
        $bcont->setCompanyName("Training Dragon");

        $bcont->display();
        
        return NULL;
    }
}
