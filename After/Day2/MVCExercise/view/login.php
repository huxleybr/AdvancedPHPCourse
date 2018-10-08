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
        $page = "";

        if (isset($_REQUEST["page"])) {
            $page = htmlspecialchars($_REQUEST["page"]);
        }

        if ($_POST) {
            include_once("../controller/LoginController.php");

            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            //create an instance of the login controller class
            $log = new LoginController();

            //display result
            $log->validateLogin($username, $password, $page);
        }
        ?>
        <div class="col-lg-12">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <fieldset>
                    <legend>Login details below...</legend>

                    <p>
                        <input type="hidden" id="page" name="page" value="<?php echo $page; ?>"/>
                    </p>

                    <p>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="olu" placeholder="Enter username" autocomplete="off" class="form-control" required/>
                    </p>

                    <p>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="olu" placeholder="Enter password" autocomplete="off" class="form-control" required/>
                    </p>

                    <p>
                        <input type="submit" id="login" name="login" value="Log in" class="btn btn-primary btn-large"/>
                    </p>

                </fieldset>
            </form>
        </div>
    </div>
</section>

<?php include_once ("footer.php"); ?>
