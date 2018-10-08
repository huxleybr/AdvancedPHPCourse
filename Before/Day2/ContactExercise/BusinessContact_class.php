<?php

include_once("Contact_class.php");

class BusinessContact extends Contact {
    
    protected $jobTitle;
    
    protected $companyName;
    
//    function getCompanyName() {
//        return $this->companyName;
//    }

    function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }    
    
    
    
    public function __construct($name, $jobTitle) {
        
        parent::__construct($name);
        $this->jobTitle = $jobTitle;
        
    }
    
    public function display() {
        
        parent::display();
        echo "<p>Company name $this->companyName <br />Job title is $this->jobTitle </p>";

        
    }
}
