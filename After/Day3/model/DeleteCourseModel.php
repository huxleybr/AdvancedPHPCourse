<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 15:21
 */
class DeleteCourseModel
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

    public function deleteCourse($courseId)
    {
        return $this->helper->deleteCourse($courseId);
    }

    public function __destruct()
    {
        $this->helper = NULL;
    }
}