<?php


class LoginModel {
    private $helper;

    public function __construct() {
        include_once ("helper/Login_class.php");
        
        $this->helper = new Login();
    }
    
    public function validateLogin($username, $password) {
        return $this->helper->validateLogin($username, $password);
    }
}
