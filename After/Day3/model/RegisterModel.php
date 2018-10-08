<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 11:34
 */
class RegisterModel
{

    private $helper;

    public function __construct()
    {
        include_once("Helper/Login_class.php");

        $this->helper = new Login();
    }

    public function register($username, $password)
    {
        return $this->helper->register($username, $password);
    }


    public function __destruct()
    {
        $this->helper = NULL;
    }

}