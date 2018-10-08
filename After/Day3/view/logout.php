<?php include_once ("header.php"); ?>
<?php

//unset the session
session_unset();

//destroy the session
session_destroy();

//refresh and redirect
header("refresh:5; url=index.php");

?>

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
        <h2 class="text-center text-uppercase text-secondary mb-0">Log out Page</h2>
        <hr class="star-dark mb-5">
        
        <p class="text-center">You just logged out...(page will redirect in a few seconds)</p>

    </div>
</section>

<?php include_once ("footer.php"); ?>