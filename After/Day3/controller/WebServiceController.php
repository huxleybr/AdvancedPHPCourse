<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 13:50
 */
class WebServiceController
{

    private $model;

    public function __construct()
    {
        //check
        if (!file_exists("../model/WebServiceModel.php")) {
            die("<h2>Err101: file needed does not exists, pls contact IT support</h2>");
        } else {
            require_once("../model/WebServiceModel.php");
        }

        //create a new instance
        $this->model = new WebServiceModel();
    }

    public function getCurrencyByCountry($country)
    {
        return $this->model->getCurrencyByCountry($country);
    }

    public function convert($temperature, $fromUnit, $toUnit)
    {
        return $this->model->convert($temperature, $fromUnit, $toUnit);
    }

    public function __destruct()
    {
        $this->model = NULL;
    }

}