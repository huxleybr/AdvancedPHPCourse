<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 26/04/2017
 * Time: 13:50
 */
class ViewCoursesController {

    private $model;

    public function __construct() {
        //check
        include_once("LoginController.php");

        LoginController::RedirectAnonymousUsersToLogInPage("viewcourses.php");

        //check
        if (!file_exists("../model/ViewCoursesModel.php")) {
            die("<h2>Err101: file needed does not exists, pls contact IT support</h2>");
        } else {
            require_once("../model/ViewCoursesModel.php");

            //create a new instance
            $this->model = new ViewCoursesModel();
        }
    }

    public function viewCourses() {
        return $this->model->viewCourses();
    }

    public function viewCoursesUsingClasses() {
        return $this->model->viewCoursesUsingClasses();
    }

    public function __destruct() {
        $this->model = NULL;
    }

}
