<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 11:29
 */
class RegisterController {

    private $model;

    public function __construct() {
        //check
        if (!file_exists("../model/RegisterModel.php")) {
            die("<h2>Error: file needed does not exists, pls contact IT support</h2>");
        } else {
            require_once("../model/RegisterModel.php");

            //create a new instance
            $this->model = new RegisterModel();
        }
    }

    public function register($username, $password) {
        return $this->model->register($username, $password);
    }

    public function __destruct() {
        $this->model = NULL;
    }

}
