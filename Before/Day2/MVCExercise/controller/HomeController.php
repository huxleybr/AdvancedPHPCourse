<?php

class HomeController {

    private $model;

    public function __construct() {
        if (!file_exists("../Model/HomeModel.php")){
            ;
        die("<h2>Error...file needed does not exist, pls contact IT Support</h2>");
        } 
        
        else {
        require_once ("../Model/HomeModel.php");

        $this->model = new HomeModel();
    }
    }
    public function welcome() {
        return $this->model->welcome();
    }
    
    public function __destruct() {
        
    }

}
