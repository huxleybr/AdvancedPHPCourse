<?php

class LoginController {

    private $model;

    public function __construct() {
        //check
        if (!file_exists("../model/LoginModel.php")) {
            die("<h2>Error: file needed does not exists, pls contact IT support</h2>");
        } else {
            require_once("../model/LoginModel.php");

            //create a new instance
            $this->model = new LoginModel();
        }
    }

    public function validateLogin($username, $password, $page = '') {
        return $this->model->validateLogin($username, $password, $page);
    }

    public static function UserIsLoggedIn() {

        if (file_exists("../model/Helper/MyConstants_class.php")) {

            include_once ("../model/Helper/MyConstants_class.php");

            if (!isset($_SESSION[MyConstants::SESSION_LOGIN_KEY]) ||
                    $_SESSION[MyConstants::SESSION_LOGIN_KEY] != MyConstants::SESSION_LOGIN_VALUE) {
                //not logged in
                return false;
            } else {
                //logged in
                return true;
            }
        } else {
            return false;
        }
    }

    public static function RedirectAnonymousUsersToLogInPage($page)
    {
        if (!self::UserIsLoggedIn())
        {
            header("Location: login.php?page=$page");
        }
    }

    public function __destruct()
    {
        $this->model = NULL;
    }

}
