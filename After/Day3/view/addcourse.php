<?php
include_once("header.php");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Add Course Page
        </h1>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <?php
        include_once("../controller/AddCourseController.php");

        $cont = new AddCourseController();


        $coursename = filter_input(INPUT_POST, 'coursename', FILTER_SANITIZE_STRING);
        $coursecode = filter_input(INPUT_POST, 'coursecode', FILTER_SANITIZE_STRING);
        $coursetutor = filter_input(INPUT_POST, 'coursetutor', FILTER_SANITIZE_STRING);
        $coursedate = filter_input(INPUT_POST, 'coursedate', FILTER_SANITIZE_STRING);

        if ($_POST) {
            echo "<p>" . $cont->addCourse($coursename, $coursecode, $coursetutor, $coursedate) . "</p>";
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend>Add Courses below...</legend>


                <p>
                    <label for="coursename">Course name:</label>
                    <input type="text" id="coursename" name="coursename" placeholder="Enter your course name" class="form-control" required/>
                </p>


                <p>
                    <label for="coursecode">Course code:</label>
                    <input type="text" id="coursecode" name="coursecode" placeholder="Enter your course" class="form-control" required/>
                </p>


                <p>
                    <label for="coursetutor">Course tutor:</label>
                    <input type="text" id="coursetutor" name="coursetutor" placeholder="Enter the course tutor" class="form-control" required/>
                </p>


                <p>
                    <label for="coursedate">Course date:</label>
                    <input type="date" id="coursedate" name="coursedate" placeholder="Enter the course date" class="form-control" required/>
                </p>

                <p>
                    <input type="submit" id="submit" name="submit" value="Add Course" class="btn btn-primary btn-large"/>
                </p>

            </fieldset>
        </form>
    </div>
</div>



<?php
include_once("footer.php");
?>
