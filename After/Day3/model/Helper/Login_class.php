<?php

include_once ("Config_class.php");
include_once ("MyConstants_class.php");

class Login {

    private $connect;

    public function __construct() {
        //open the connection
        $this->connect = mysqli_connect(Config::SERVER, Config::USERNAME, Config::PASSWORD, Config::DATABASE);

        //check if the connection was successful or die
        if (!$this->connect) {
            //development error
//            die("Connection Error is " . mysqli_errno($this->connect));
            //live error message
            die(MyConstants::CONNECTION_ERROR);
        }
    }

    public function validateLogin($username, $password, $page = '') {

        //server-side validation
        if (empty($username)) {
            echo "<p class='text-danger'>Username cannot be empty</p>";
        } else if (empty($password)) {
            echo "<p class='text-danger'>Password cannot be empty</p>";
        } else {
            //prevent sql injection as below
            $username = mysqli_escape_string($this->connect, $username);
            $password = mysqli_escape_string($this->connect, $password);

            //encrypt the password
            $password = md5($password);

            $query = "Select username from tb_Users where username='$username' and password='$password';";

            //get the result
            $result = mysqli_query($this->connect, $query);

            //get the number of rows affected
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
//                $_SESSION["username"] = $username;
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

                //refresh page after 5 seconds
//                header("refresh:5; url=index.php");

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
            //prevent sql injection
            $username = mysqli_escape_string($this->connect, $username);
            $password = mysqli_escape_string($this->connect, $password);

            //try to get the user details from the database
            $sql = mysqli_query($this->connect, "Select username from tb_Users where username='$username';");

            //get the number of rows returned
            $numRows = mysqli_num_rows($sql);

            //check if username already exists
            if ($numRows > 0) {
                //username exists
                echo "<p class='text-danger'><b>Username already exists <a href='login.php'>(Click to Login)</a></b></p>";
            } else {
                //username does not exist
                
                //encrypt the password
                $password = md5($password);

                //sql
                $sql = "Insert Into tb_Users Values('$username', '$password');";

                //check
                if (mysqli_query($this->connect, $sql)) {

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
        //close the connection
        mysqli_close($this->connect);
    }

}
