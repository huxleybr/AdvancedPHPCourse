<?php

class ContactController {
    
    private $model;
    
    public function __construct() {
        
        //check
        if (!file_exists("../model/ContactModel.php")){
            die("<h2>Error...file needed does not exist, pls contact IT Support</h2>");
        } else {
            require_once ("../model/ContactModel.php");
            
            $this->model = new ContactModel();
        }
    }
    
    public function display() {
        return $this->model->display();
    }

    public function __destruct()
    {
        $this->model = NULL;
    }
}
