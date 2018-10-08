<?php

include_once("Contact_class.php");

class BusinessContact extends Contact {
    private $jobTitle;
    private $companyName;
    
    public function __construct($name, $jobTitle) {
        parent::__construct($name);
        $this->jobTitle = $jobTitle;
    }
    
    public function setCompanyName($companyName){
        $this->companyName = $companyName;
    }
    
    public function display(){
        parent::display();
        echo "<p>Job Title is $this->jobTitle and the company name is $this->companyName";        
    }
}
