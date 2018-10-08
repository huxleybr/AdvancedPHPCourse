<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once ("../controller/HomeController.php");
        
        //create a new instance of HomeController
        $cont = new HomeController();
        
        //display the welcome
        echo "<p>" . $cont->welcome() . "</p>";
        ?>
    </body>
</html>
