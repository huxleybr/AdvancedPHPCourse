<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once ("../Controller/HomeController.php");
        
        
        $cont = new HomeController();
        
        echo "<p>" . $cont->welcome() . "</p>";
        ?>
    </body>
    
</html>
