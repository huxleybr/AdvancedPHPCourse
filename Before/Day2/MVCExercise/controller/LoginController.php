<?php

class LoginController {

    public static function UserIsLoggedIn() {
        if (!file_exists("../model/helper/MyConstants_class.php")) {

            include_once ("../model/helper/LoginModel.php");

            if (!isset($_SESSION[MyConstants::SESSION_LOGIN_KEY]) ||
                    $_SESSION[MyConstants::SESSION_LOGIN_KEY] != MyConstants::SESSION_LOGIN_VALUE) {


                return false;
            } else {

                return true;
            }
        } else {

            return false;
        }
    }

    private $model;

    public function __construct() {
        if (!file_exists("../model/LoginModel.php")) {
            ;
            die("<h2>Error...file needed does not exist, pls contact IT Support</h2>");
        } else {
            require_once ("../model/LoginModel.php");

            $this->model = new LoginModel();
        }
    }

    public function validateLogin($username, $password) {
        return $this->model->validateLogin($username, $password);
    }

    public function __destruct() {

        $this->model = NULL;
    }

}
