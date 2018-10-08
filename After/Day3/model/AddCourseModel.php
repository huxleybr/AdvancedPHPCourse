<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 15:21
 */
class AddCourseModel
{

    private $helper;

    public function __construct()
    {
        include_once("Helper/PDODBHandler.php");

        $this->helper = new PDODBHandler();
    }

    public function addCourse($courseName, $courseCode, $courseTutor, $courseDate)
    {
        return $this->helper->addCourse($courseName, $courseCode, $courseTutor, $courseDate);
    }

    public function __destruct()
    {
        $this->helper = NULL;
    }
}