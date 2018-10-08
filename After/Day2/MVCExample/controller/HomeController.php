<?php

class HomeController {
    
    private $model;
    
    public function __construct() {
        
        //check
        if (!file_exists("../model/HomeModel.php")){
            die("<h2>Error...file needed does not exist, pls contact IT Support</h2>");
        } else {
            require_once ("../model/HomeModel.php");
            
            $this->model = new HomeModel();
        }
    }
    
    public function welcome() {
        return $this->model->welcome();
    }

    public function __destruct()
    {
        $this->model = NULL;
    }
}
