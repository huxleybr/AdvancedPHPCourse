<?php


class RegisterModel {
    
    
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
