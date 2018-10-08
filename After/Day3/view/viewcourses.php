<?php

include_once("header.php");
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            View Courses Page
        </h1>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">


            <?php

            include_once("../controller/ViewCoursesController.php");

            $cont = new ViewCoursesController();

            $result = $cont->viewCourses();
            ?>

            <?php

            if ($result):

                //courses exist
                ?>
        <h2>View all the courses</h2><hr>
                <div class="row">
                    <table  style="width:100%; border:1px solid;" cellpadding="5" cellspacing="5">
                        <thead>
                        <tr style="background-color: #adadad;">
                            <th scope="col">Course Name</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Tutor</th>
                            <th scope="col">Course Date</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>

                        <?php foreach ($result as $row) :
                        ?>
                            <tr style="text-align: left;">
                                <td><?php echo $row['course_name']; ?></td>
                                <td><?php echo $row['course_code']; ?></td>
                                <td><?php echo $row['course_tutor']; ?></td>
                                <td><?php echo $row['course_date']; ?></td>
                                <td><a href="editcourse.php?courseId=<?php echo $row['course_id']; ?>">Edit</a></td>
                                <td><a href="deletecourse.php?courseId=<?php echo $row['course_id']; ?>"
                                    onclick="return confirm('Are you sure you wish to delete this course?')">Delete</a></td>
                            </tr>

                        <?php
                        endforeach;
                        ?>
                    </table>
                </div>
            <?php
            endif;
            ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">


        <?php

//        include_once("../controller/ViewCoursesController.php");

//        $cont = new ViewCoursesController();

        $result = $cont->viewCoursesUsingClasses();
        ?>

        <?php

        if ($result):

            //courses exist
            ?>
            <hr>
            <h2>View all the courses using classes</h2>
            <hr>
            <div class="row">
                <table  style="width:100%; border:1px solid;" cellpadding="5" cellspacing="5">
                    <thead>
                    <tr style="background-color: #adadad;">
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Course Tutor</th>
                        <th scope="col">Course Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>

                    <?php foreach ($result as $row) :
                        ?>
                        <tr style="text-align: left;">
                            <td><?php echo $row->getCourseName(); ?></td>
                            <td><?php echo $row->getCourseCode(); ?></td>
                            <td><?php echo $row->getCourseTutor(); ?></td>
                            <td><?php echo $row->getCourseDate(); ?></td>
                            <td><a href="editcourse.php?courseId=<?php echo $row->getCourseId(); ?>">Edit</a></td>
                            <td><a href="deletecourse.php?courseId=<?php echo $row->getCourseId(); ?>"
                                   onclick="return confirm('Are you sure you wish to delete this course?')">Delete</a></td>
                        </tr>

                        <?php
                    endforeach;
                    ?>
                </table>
            </div>
            <?php
        endif;
        ?>
    </div>
</div>



<?php

include_once("footer.php");
?>
