<?php

include_once("header.php");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            File Example Page
        </h1>
    </div>
</div>


<?php

$fileName = "";

$content = "";

if ($_POST) {
    $fileName = $_POST["fileName"];
    $content = $_POST["content"];

    include_once("../controller/FileExampleController.php");

    $cont = new FileExampleController();

    if (isset($_POST["showTextFile"])) {
        $content = $cont->showTextFile($fileName);
    } else if (isset($_POST["save"])) {
        echo $cont->saveFile($fileName, $content);
    } else if (isset($_POST["delete"])) {
        echo $cont->deleteFile($fileName);
    }
}

?>

    <div class="row">

        <div class="col-sm-6">

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <fieldset>
                    <legend>File details below...</legend>

                    <div class="form-group">
                        <p>
                            <label for="fileName"> File name: </label>
                            <input type="text" id="fileName" name="fileName" value="<?php echo $fileName; ?>"
                                   placeholder="Enter file name" class="form-control"/>
                        </p>
                    </div>
                    <div class="form-group">
                        <p>
                            <input type="submit" id="showTextFile" name="showTextFile" value="Show Text File Content"
                                   class="btn btn-success btn-small"/>

                            <input type="submit" id="showXML" name="showXML" value="Show XML File Content"
                                   class="btn btn-success btn-small"/>

                        </p>
                    </div>

                    <div class="form-group">
                        <p>
                            <label for="content">Content: </label>
                            <textarea id="content" name="content" placeholder="Enter file content" rows="10" cols="20"
                                      class="form-control"><?php echo $content; ?></textarea>
                        </p>
                    </div>
                    <div class="form-group">
                        <p>
                            <input type="submit" id="delete" name="delete" value="Delete File"
                                   class="btn btn-danger btn-large"
                                   onclick="return confirm('Are you sure you wish to delete this file?');"/>

                            <input type="submit" id="save" name="save" value="Save File"
                                   class="btn btn-primary btn-large"/>

                        </p>
                    </div>
                </fieldset>

            </form>

        </div>


        <div class="col-sm-6">

            <h3>XML Example</h3>
            <hr/>

            <?php

            if (isset($_POST["showXML"])) {
                echo $cont->showXMLFile($fileName);
            }
            ?>

        </div>

    </div>

<?php

include_once("footer.php");
?>