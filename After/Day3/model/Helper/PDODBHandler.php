<?php

include_once("MyConstants_class.php");
include_once("Config_class.php");

class PDODBHandler {
    
    private $pdo;
    
    public function __construct() {
        try{
            
            $server = Config::SERVER;
            $database = Config::DATABASE;
            $username = Config::USERNAME;
            $password = Config::PASSWORD;
            
            //initialise the pdo object
            $this->pdo = new PDO("mysql: host={$server}; dbname={$database}", $username, $password);
            
            //tell pdo to display errors in try block
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $ex) {
            //development message
//            die("Error: " . $ex->getMessage());
            
            //live message
            die(MyConstants::CONNECTION_ERROR);
        }
    }
    
    public function selectCommand($query){
        try{
            
            $sql = $this->pdo->prepare($query);
            
            //execute
            $sql->execute();
            
            //get the result set
            $result = $sql->fetchAll();
            
            return $result;
            
        } catch (PDOException $ex) {
            //development message
//            echo "<p class='text-danger'>Error: " . $ex->getMessage() . "</p>";
            
            //live message
            echo "<p class='text-danger'>Error: " . MyConstants::CONNECTION_ERROR . "</p>";
        }
        
        return null;
    }
    
    public function executeCommand($query){
        try{
            
            $sql = $this->pdo->prepare($query);
            
            //execute
            $result = $sql->execute();
            
            return $result;
            
        } catch (PDOException $ex) {
            //development message
//            echo "<p class='text-danger'>Error: " . $ex->getMessage() . "</p>";
            
            //live message
            echo "<p class='text-danger'>Error: " . MyConstants::CONNECTION_ERROR . "</p>";
        }
        
        return -1;
    }
    
    public function viewCourses()
    {
        try {
            $sql = $this->pdo->prepare("Select * from Courses;");

            //execute
            $sql->execute();

            //get the result set
            $result = $sql->fetchAll();

            return $result;
        } catch (PDOException $pd) {
            echo "<p style='color:red;'>PDO Error occured in viewCourses, please contact Admin</p>";
        } catch (Exception $pd) {
            echo "<p style='color:red;'>Fatal Error occured in viewCourses, please contact Admin</p>";
        }

        return null;

    }

    public function viewCoursesUsingClasses()
    {
        try {
            $sql = $this->pdo->prepare("Select * from Courses;");

            //include the file
            include_once("Courses_class.php");

            //tell pdo to use class called courses
            $sql->setFetchMode(PDO::FETCH_CLASS, "Courses");

            //execute
            $sql->execute();

            //get the result set
            $result = $sql->fetchAll();

            return $result;
        } catch (PDOException $pd) {
            echo "<p style='color:red;'>PDO Error occured in viewCoursesUsingClasses, please contact Admin</p>";
        } catch (Exception $pd) {
            echo "<p style='color:red;'>Fatal Error occured in viewCoursesUsingClasses, please contact Admin</p>";
        }

        return null;

    }

    public function addCourse($courseName, $courseCode, $courseTutor, $courseDate)
    {
        //check and validate
        if (empty($courseName)) {
            return "<p style='color:red'>Course name cannot be empty</p>";
        }

        if (empty($courseCode)) {
            return "<p style='color:red'>Course code cannot be empty</p>";
        }

        if (empty($courseTutor)) {
            return "<p style='color:red'>Course tutor cannot be empty</p>";
        }

        if (empty($courseDate)) {
            return "<p style='color:red'>Course date cannot be empty</p>";
        }

        try {
            $sql = "Insert Into Courses(course_name, course_code, course_tutor, course_date)
                    Values(:courseName, :courseCode, :courseTutor, :courseDate);";

            //write the sql query
            $query = $this->pdo->prepare($sql);

            //bind the data
            $query->bindParam(":courseName", $courseName);
            $query->bindParam(":courseCode", $courseCode);
            $query->bindParam(":courseTutor", $courseTutor);
            $query->bindParam(":courseDate", $courseDate);

            //execute the query
            $result = $query->execute();

            if ($result) {
                return "<p style='color:green'>Course added successfully</p>";
            } else {
                return "<p style='color:red'>Course not added, please contact admin</p>";
            }

        } catch (PDOException $pd) {
            echo "<p style='color:red'>Error P101 occured in add Course, please contact IT Support</p>";
//            echo "<p style='color:red'>Error P101 occured, please contact IT Support: " . $pd->getMessage() . "</p>";
        } catch (Exception $ex) {
            echo "<p style='color:red'>Fatal error occured in add Course, please contact IT Support</p>";
//            echo "<p style='color:red'>Fatal error occured, please contact IT Support: " . $ex->getMessage() . "</p>";
        }

        return null;

    }

    //function for edit_course.php
    public function viewCourse($courseId)
    {
        //validate
        if (empty($courseId)) {
            echo "<p style='color:red'><b>Course Id cannot be empty</b></p>";
            return null;
        }

        try {
            //include the course class
            include_once("Courses_class.php");

            //write the sql query
            $query = $this->pdo->prepare("Select * from Courses where course_id=:courseId;");

            //bind the data
            $query->bindParam(":courseId", $courseId);

            //tell pdo to use the class
            $query->setFetchMode(PDO::FETCH_CLASS, "Courses");

            //execute the query
            $query->execute();

            //get the table result set
            $result = $query->fetch();

            //return the result set
            return $result;

        } catch (PDOException $pd) {
            echo "<p style='color:red'>Error P101 occured in view courses, please contact IT Support</p>";
//            echo "<p style='color:red'>Error P101 occured, please contact IT Support: " . $pd->getMessage() . "</p>";
        } catch (Exception $ex) {
            echo "<p style='color:red'>Fatal error occured in view courses, please contact IT Support</p>";
//            echo "<p style='color:red'>Fatal error occured, please contact IT Support: " . $ex->getMessage() . "</p>";
        }

        return null;
    }

    //function for edit_course.php
    public function editCourse($courseId, $courseName, $courseCode, $courseTutor, $courseDate)
    {

        //check and validate
        if (empty($courseId)) {
            return "<p style='color:red'>Course id cannot be empty</p>";
        }

        if (empty($courseName)) {
            return "<p style='color:red'>Course name cannot be empty</p>";
        }

        if (empty($courseCode)) {
            return "<p style='color:red'>Course code cannot be empty</p>";
        }

        if (empty($courseTutor)) {
            return "<p style='color:red'>Course tutor cannot be empty</p>";
        }

        if (empty($courseDate)) {
            return "<p style='color:red'>Course date cannot be empty</p>";
        }

        try {
            $sql = "Update Courses set course_name=:courseName, course_code= :courseCode,
course_tutor=:courseTutor, course_date=:courseDate where course_id=:courseId;";

            //write the sql query
            $query = $this->pdo->prepare($sql);

            //bind the data
            $query->bindParam(":courseId", $courseId);
            $query->bindParam(":courseName", $courseName);
            $query->bindParam(":courseCode", $courseCode);
            $query->bindParam(":courseTutor", $courseTutor);
            $query->bindParam(":courseDate", $courseDate);

            //execute the query
            $result = $query->execute();

            if ($result) {
                return "<p style='color:green'>Course updated successfully</p>";
            } else {
                return "<p style='color:red'>Course not edited, please contact admin</p>";
            }

        } catch (PDOException $pd) {
            echo "<p style='color:red'>Error P101 occured in edit Course, please contact IT Support</p>";
//            echo "<p style='color:red'>Error P101 occured, please contact IT Support: " . $pd->getMessage() . "</p>";
        } catch (Exception $ex) {
            echo "<p style='color:red'>Fatal error occured in edit Course, please contact IT Support</p>";
//            echo "<p style='color:red'>Fatal error occured, please contact IT Support: " . $ex->getMessage() . "</p>";
        }

        return null;

    }

    //function for delete_course.php
    public function deleteCourse($courseId)
    {

        //check and validate
        if (empty($courseId)) {
            return "<p style='color:red'>Course id cannot be empty</p>";
        }

        try {
            $sql = "Delete From Courses where course_id=:courseId;";

            //write the sql query
            $query = $this->pdo->prepare($sql);

            //bind the data
            $query->bindParam(":courseId", $courseId);

            //execute the query
            $result = $query->execute();

            if ($result) {
                return "<p style='color:green'>Course deleted successfully</p>";
            } else {
                return "<p style='color:red'>Course not deleted, please contact admin</p>";
            }

        } catch (PDOException $pd) {
//            echo "<p style='color:red'>Error P101 occured in delete Course, please contact IT Support</p>";
            echo "<p style='color:red'>Error P101 occured, please contact IT Support: " . $pd->getMessage() . "</p>";
        } catch (Exception $ex) {
            echo "<p style='color:red'>Fatal error occured in delete Course, please contact IT Support</p>";
//            echo "<p style='color:red'>Fatal error occured, please contact IT Support: " . $ex->getMessage() . "</p>";
        }

        return null;

    }
    
    public function __destruct() {
        if ($this->pdo != null){
            $this->pdo = null;
        }
    }
}
