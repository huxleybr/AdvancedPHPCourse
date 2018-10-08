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
        include_once("../controller/ContactController.php");
        
        //create a new instance of controller
        $cont = new ContactController();
        
        $cont->display();
        ?>
    </div>
</section>

<?php include_once ("footer.php"); ?>
