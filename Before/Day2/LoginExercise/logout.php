
<?php include_once ("header.php"); ?>
<?php
//
session_unset();

session_destroy();

header("refresh:5; url=index.php");
?>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-0">Luke Site</h1>
        <hr class="star-light">
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Logout page</h2>
        <hr class="star-light">
        
        <p>You just logged out {page will redirect in a few seconds...}</p>
        
      </div>
    </section>

    <?php include_once ("footer.php"); ?>


    

    

    