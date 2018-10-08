<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Olu Website</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Olu Website</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="home">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="webservice.php">Web Service</a>
                </li>
                <li>
                    <a href="file_example.php">File Example</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="addcourse.php">Add Course</a>
                        </li>
                        <li>
                            <a href="editcourse.php">Edit Course</a>
                        </li>
                        <li>
                            <a href="deletecourse.php">Delete Course</a>
                        </li>
                        <li>
                            <a href="viewcourses.php">View Courses</a>
                        </li>
                    </ul>
                </li>

                <ul class="nav navbar-nav navbar-right">

                    <?php
                    include_once("../controller/LoginController.php");

                    //check
                    if (!LoginController::UserIsLoggedIn()):
                        //user is not logged in

                        ?>
                        <li>
                            <a href="login.php">Log in</a>
                        </li>
                        <li>
                            <a href="register.php">Register</a>
                        </li>

                        <?php

                    else:
                        //user is logged in

                        ?>
                        <li>
                            <a href="logout.php">Log out</a>
                        </li>

                        <?php
                    endif;
                    ?>
                </ul> <!--logged in ul-->

            </ul>
        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
</nav>

<!-- Header Carousel -->


<!-- Page Content -->
<div class="container">