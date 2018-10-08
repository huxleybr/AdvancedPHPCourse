<?php

include_once("header.php");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Home Page
        </h1>
    </div>
</div>

<?php

include_once("../controller/WebServiceController.php");

$cont = new WebServiceController();

$temperature = "";

if ($_POST) {
    $temperature = $_POST["temperature"];
    $fromUnit = $_POST["fromUnit"];
    $toUnit = $_POST["toUnit"];

    //var_dump($cont->convert($temperature, $fromUnit, $toUnit));

    echo "<p style='color:green;'>Converting $temperature $fromUnit to $toUnit = " . $cont->convert($temperature, $fromUnit, $toUnit) . " $toUnit</p>";
}
?>

<div class="row">

    <div class="col-lg-12">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <fieldset>
                <legend>Do conversion</legend>

                <div class="form-group">
                    <p>
                        <label for="temperature"> Temperature: </label>
                        <input type="text" id="temperature" name="temperature" value="<?php echo $temperature; ?>"
                               placeholder="Enter temperature" class="form-control"/>
                    </p>
                </div>

                <div class="form-group">
                    <p>
                        <label for="fromUnit"> From Unit: </label>

                        <select id="fromUnit" name="fromUnit" class="form-control">
                            <option value="degreeCelsius" selected="selected">degreeCelsius</option>
                            <option value="degreeFahrenheit">degreeFahrenheit</option>
                            <option value="degreeRankine">degreeRankine</option>
                            <option value="degreeReaumur">degreeReaumur</option>
                            <option value="kelvin">kelvin</option>
                        </select>
                    </p>
                </div>

                <div class="form-group">
                    <p>
                        <label for="toUnit"> To Unit: </label>

                        <select id="toUnit" name="toUnit" class="form-control">
                            <option value="degreeCelsius">degreeCelsius</option>
                            <option value="degreeFahrenheit" selected="selected">degreeFahrenheit</option>
                            <option value="degreeRankine">degreeRankine</option>
                            <option value="degreeReaumur">degreeReaumur</option>
                            <option value="kelvin">kelvin</option>
                        </select>
                    </p>
                </div>

                <div class="form-group">
                    <p>
                        <input type="submit" id="convert" name="convert" value="Convert"
                               class="btn btn-success btn-large"/>

                    </p>
                </div>


            </fieldset>

        </form>

    </div>


    <div class="row">
        <div class="col-lg-12">
            <h2>Getting cities by Country France</h2>
            <hr/>

            <?php
//            include_once("../controller/WebServiceController.php");
//
//            $cont = new WebServiceController();

            $result = $cont->getCurrencyByCountry("France");

//            var_dump($result);
            echo "<p>France currency is $result</p>";

            ?>

        </div>
    </div>


    <?php

    include_once("footer.php");
    ?>
