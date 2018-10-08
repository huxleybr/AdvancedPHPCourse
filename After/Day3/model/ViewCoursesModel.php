<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 15:21
 */
class ViewCoursesModel
{

    private $helper;

    public function __construct()
    {
        include_once("Helper/PDODBHandler.php");

        $this->helper = new PDODBHandler();
    }

    public function viewCourses()
    {
        return $this->helper->viewCourses();
    }

    public function viewCoursesUsingClasses()
    {
        return $this->helper->viewCoursesUsingClasses();
    }

    public function __destruct()
    {
        $this->helper = NULL;
    }
}