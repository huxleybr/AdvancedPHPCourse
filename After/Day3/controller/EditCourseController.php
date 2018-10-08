<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 13:50
 */
class EditCourseController {

    private $model;

    public function __construct() {
        //check
        include_once("LoginController.php");

        LoginController::RedirectAnonymousUsersToLogInPage("editcourse.php");

        //check
        if (!file_exists("../model/EditCourseModel.php")) {
            die("<h2>Err101: file needed does not exists, pls contact IT support</h2>");
        } else {
            require_once("../model/EditCourseModel.php");

            //create a new instance
            $this->model = new EditCourseModel();
        }
    }

    public function viewCourse($courseId) {
        return $this->model->viewCourse($courseId);
    }

    public function editCourse($courseId, $courseName, $courseCode, $courseTutor, $courseDate) {
        return $this->model->editCourse($courseId, $courseName, $courseCode, $courseTutor, $courseDate);
    }

    public function __destruct() {
        $this->model = NULL;
    }

}
