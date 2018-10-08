<?php

include_once ("Config_class.php");
include_once ("MyConstants_class.php");

class Login {

    private $connect;

    public function __construct() {
        $this->connect = mysqli_connect(Config::SERVER, Config::USERNAME, Config::PASSWORD, Config::DATABASE);

        if (!$this->connect) {
//            die("Connection Error is " . mysql_error($this->connect));


            die(MyConstants::CONNECTION_ERROR);
        }
    }

    public function validateLogin($username, $password) {

        if (empty($username)) {
            echo "<p class='textidanger'>Username cannot be empty</p>";
        } else if (empty($password)) {
            echo "<p class='text-danger'>Password cannot be empty</p>";
        } else {
            //prevent sql injection
            $username = mysqli_escape_string($this->connect, $username);
            $password = mysqli_escape_string($this->connect, $password);

            $query = "Select username from tb_Users where username='$username' and password='$password';";

            //get the result
            $result = mysqli_query($this->connect, $query);

            $numRows = mysqli_num_rows($result);

            //check
            if ($numRows != 1) {
                //wrong details
                echo "<p class='text-danger'>Username and/or password is incorrect</p>";
                echo "<p><a href='register.php' title='register'>Register/Sign up</a></p>";
            } else {
                //correct
                //save the session
//                $_SESSION["key"] = "value";
//
//                $_SESSION["username"] = "value";

                $_SESSION[MyConstants::SESSION_LOGIN_KEY] = MyConstants::SESSION_LOGIN_VALUE;
                $_SESSION[MyConstants::SESSION_USERNAME] = $username;


                header("refresh:5; url=index.php");
                echo "<p class='text-success'>Welcome $username</p>";
            }
        }
    }

    public function register($username, $password) {

        if (empty($username)) {
            echo "<p class='textidanger'>Username cannot be empty</p>";
        } else if (empty($password)) {
            echo "<p class='text-danger'>Password cannot be empty</p>";
        } else {
            //prevent sql injection
            $username = mysqli_escape_string($this->connect, $username);
            $password = mysqli_escape_string($this->connect, $password);

            $result = "Insert into tb_Users values ('$username', '$password');";

            //check
            if (mysqli_query($this->connect, $result)) {

                //correct

                $_SESSION[MyConstants::SESSION_LOGIN_KEY] = MyConstants::SESSION_LOGIN_VALUE;
                $_SESSION[MyConstants::SESSION_USERNAME] = $username;


                header("refresh:5; url=index.php");
                echo "<p><a href='register.php' title='register'>Register completed</a></p>";
            } else {
                echo "<p>failed</p>";
            }
        }
    }

}

//Notice: Undefined variable: query in C:\xampp\htdocs\AdvancedPHP\Day2\LoginExercise\Login_class.php on line 82
//
//Warning: mysqli_query(): Empty query in C:\xampp\htdocs\AdvancedPHP\Day2\LoginExercise\Login_class.php on line 82