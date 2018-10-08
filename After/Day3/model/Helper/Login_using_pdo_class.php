<?php

include_once ("Config_class.php");
include_once ("MyConstants_class.php");
include_once ("PDODBHandler.php");

class Login {

    private $dbHandler;

    public function __construct() {
        //instantiate dbHandler
        $this->dbHandler = new PDODBHandler();
    }

    public function validateLogin($username, $password, $page = '') {

        //server-side validation
        if (empty($username)) {
            echo "<p class='text-danger'>Username cannot be empty</p>";
        } else if (empty($password)) {
            echo "<p class='text-danger'>Password cannot be empty</p>";
        } else {

            //encrypt the password
            $password = md5($password);

            $query = "Select username from tb_Users where username='$username' and password='$password';";

            //get the result
            $result = $this->dbHandler->selectCommand($query);

            //check
            if (!$result) {
                //wrong details
                echo "<p class='text-danger'>Username and/or password is incorrect</p>";
                echo "<p><a href='register.php' title='register'>Register/Sign up</a></p>";
            } else {
                //correct 
                //save the session
                $_SESSION[MyConstants::SESSION_LOGIN_KEY] = MyConstants::SESSION_LOGIN_VALUE;
                $_SESSION[MyConstants::SESSION_USERNAME] = $username;

                //check if page was passed
                if (!empty($page)) {
                    //redirect to new page
                    //code below redirects after 2 seconds
                    header("refresh:1; url=$page");
                } else {
                    //code below redirects after 2 seconds
                    header("refresh:1; url=index.php");
                }

                echo "<p class='text-success'>Welcome $username</p>";
            }
        }
    }

    public function register($username, $password) {

        //server-side validation
        if (empty($username)) {
            echo "<p class='text-danger'>Username cannot be empty</p>";
        } else if (empty($password)) {
            echo "<p class='text-danger'>Password cannot be empty</p>";
        } else {

            //try to get the user details from the database
            $query = "Select username from tb_Users where username='$username';";

            //get the result
            $result = $this->dbHandler->selectCommand($query);

            //check if username already exists
            if ($result) {
                //username exists
                echo "<p class='text-danger'><b>Username already exists <a href='login.php'>(Click to Login)</a></b></p>";
            } else {
                //username does not exist
                //encrypt the password
                $password = md5($password);

                //sql
                $query = "Insert Into tb_Users Values('$username', '$password');";

                //get the result
                $result = $this->dbHandler->executeCommand($query);

                //check
                if ($result > 0) {

                    //good
                    //save the session
                    $_SESSION[MyConstants::SESSION_LOGIN_KEY] = MyConstants::SESSION_LOGIN_VALUE;
                    $_SESSION[MyConstants::SESSION_USERNAME] = $username;


                    echo "<p class='text-success'><b>Registration successful <a href='index.php'>(Click Home)</a></b></p>";
                } else {

                    //bad
                    echo "<p class='text-danger'><b>Registration not successful</b></p>";
                    echo "<p>Please <a href='contact.php'>contact admin</a> to help you register</p>";
                }
            }
        }
    }

    public function __destruct() {
        //destroy the object
        $this->dbHandler = null;
    }

}
