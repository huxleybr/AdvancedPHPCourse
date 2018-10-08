<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 15:21
 */
class EditCourseModel
{

    private $helper;

    public function __construct()
    {
        include_once("Helper/PDODBHandler.php");

        $this->helper = new PDODBHandler();
    }

    public function viewCourse($courseId)
    {
        return $this->helper->viewCourse($courseId);
    }

    public function editCourse($courseId, $courseName, $courseCode, $courseTutor, $courseDate)
    {
        return $this->helper->editCourse($courseId, $courseName, $courseCode, $courseTutor, $courseDate);
    }

    public function __destruct()
    {
        $this->helper = NULL;
    }
}