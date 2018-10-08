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
        include_once("Contact_class.php");
        include_once("BusinessContact_class.php");

        echo "<h2 class='text-center text-uppercase text-secondary mb-0'>Contact details</h2><hr class='star-dark mb-5'/>";

        $cont = new Contact("Olu Akins");
        $cont->setPhoneNumber("07989896776");

        $cont->display();

        echo "<h2 class='text-center text-uppercase text-secondary mb-0'>Business Contact details</h2><hr class='star-dark mb-5'/>";

        $bcont = new BusinessContact("Mark Brown", "IT Support");
        $bcont->setPhoneNumber("07867543423");
        $bcont->setCompanyName("Training Dragon");

        $bcont->display();
        ?>
    </div>
</section>

<?php include_once ("footer.php"); ?>
