<?php

class AddCourseController {

    private $model;

    public function __construct() {
        //check
        include_once("LoginController.php");

        LoginController::RedirectAnonymousUsersToLogInPage("addcourse.php");

        //check
        if (!file_exists("../model/AddCourseModel.php")) {
            die("<h2>Err101: file needed does not exists, pls contact IT support</h2>");
        } else {
            require_once("../model/AddCourseModel.php");

            //create a new instance
            $this->model = new AddCourseModel();
        }
    }

    public function addCourse($courseName, $courseCode, $courseTutor, $courseDate) {
        return $this->model->addCourse($courseName, $courseCode, $courseTutor, $courseDate);
    }

    public function __destruct() {
        $this->model = NULL;
    }

}
