<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 10:58
 */
class LoginModel
{
    private $helper;

    public function __construct()
    {
        include_once("Helper/Login_class.php");

        $this->helper = new Login();
    }

    public function validateLogin($username, $password, $page = '')
    {
        return $this->helper->validateLogin($username, $password, $page);
    }

    public function __destruct()
    {
        $this->helper = NULL;
    }

}