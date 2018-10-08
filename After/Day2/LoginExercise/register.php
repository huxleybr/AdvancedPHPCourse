<?php include_once ("header.php"); ?>

<!-- Header -->
<header class="bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Olu Site</h1>
        <hr class="star-light">
    </div>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <?php
        include_once("Login_class.php");

        if ($_POST) {
            //do not access superglobal $_POST Array directly
//            $username = $_POST["username"];
//            $password = $_POST["password"];
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            //create a new instance of login class
            $log = new Login();

            $log->register($username, $password);
        }
        ?>
        <h2 class="text-center text-uppercase text-secondary mb-0">Registration page</h2>
        <hr class="star-dark mb-5">
        <div class="col-lg-12">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <fieldset>
                    <legend>Registration details below...</legend>

                    <p>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter username" autocomplete="off" class="form-control" required/>
                    </p>

                    <p>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter password" autocomplete="off" class="form-control" required/>
                    </p>

                    <p>
                        <input type="submit" id="submit" name="submit" value="Register" class="btn btn-primary btn-large"/>
                    </p>

                </fieldset>
            </form>
        </div>
    </div>
</section>

<?php include_once ("footer.php"); ?>