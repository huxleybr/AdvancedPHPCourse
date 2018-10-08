<?php

include_once("header.php");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Delete Course Page
        </h1>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <?php

        include_once("../controller/DeleteCourseController.php");

        //create a new instance of controller
        $cont = new DeleteCourseController();

        $courseId = "";
        $courseName = "";
        $courseCode = "";
        $courseTutor = "";
        $courseDate = "";

        $result = "";


        if (isset($_GET['courseId']))
        {
            $courseId = htmlspecialchars($_GET['courseId']);

            $result = $cont->viewCourse($courseId);

            //load the result
            if ($result)
            {
                $courseName = $result->getCourseName();
                $courseCode = $result->getCourseCode();
                $courseTutor = $result->getCourseTutor();
                $courseDate = $result->getCourseDate();
            }
        }

        if ($_POST)
        {
            $courseId = filter_input(INPUT_POST, 'courseid', FILTER_SANITIZE_NUMBER_INT);
            
            $courseName = filter_input(INPUT_POST, 'coursename', FILTER_SANITIZE_STRING);
            $courseCode = filter_input(INPUT_POST, 'coursecode', FILTER_SANITIZE_STRING);
            $courseTutor = filter_input(INPUT_POST, 'coursetutor', FILTER_SANITIZE_STRING);
            $courseDate = filter_input(INPUT_POST, 'coursedate', FILTER_SANITIZE_STRING);
            $question = filter_input(INPUT_POST, 'question', FILTER_SANITIZE_STRING);

            if ($question == "Yes")
            {
                //delete
                echo "<p>" . $cont->deleteCourse($courseId) . "</p>";
            }

        }
        ?>

        <?php if ($result): ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend>Delete Courses...</legend>

                <p><input type="hidden" id="courseid" name="courseid" value="<?php echo $courseId; ?>" placeholder="Enter course name" />
                </p>

                <p>
                    <label for="coursename">Course name:</label>
                    <input type="text" readonly="readonly" id="coursename" name="coursename" value="<?php echo $courseName; ?>"  placeholder="Enter your course name" class="form-control" required/>
                </p>


                <p>
                    <label for="coursecode">Course code:</label>
                    <input type="text" readonly="readonly" id="coursecode" name="coursecode" value="<?php echo $courseCode; ?>" placeholder="Enter your course" class="form-control" required/>
                </p>


                <p>
                    <label for="coursetutor">Course tutor:</label>
                    <input type="text" readonly="readonly" id="coursetutor" name="coursetutor" value="<?php echo $courseTutor; ?>" placeholder="Enter the course tutor" class="form-control" required/>
                </p>


                <p>
                    <label for="coursedate">Course date:</label>
                    <input type="date" readonly="readonly" id="coursedate" name="coursedate" value="<?php echo $courseDate; ?>" placeholder="Enter the course date" class="form-control" required/>
                </p>

                <p>Delete?:
                    <select name="question">
                        <option value="Yes">Yes, I am sure</option>
                        <option value="No" selected="selected">No, do not delete</option>
                    </select>
                </p>

                <p>
                    <input type="submit" id="submit" name="submit" value="Delete" class="btn btn-primary btn-large"/>
                </p>

            </fieldset>
        </form>
        <?php else: ?>
            <p><a href="viewcourses.php">View More Courses to Delete</a></p>
        <?php endif; ?>
    </div>
</div>



<?php

include_once("footer.php");
?>
