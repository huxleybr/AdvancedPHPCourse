<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 27/04/2017
 * Time: 10:42
 */
class Courses
{

    private $course_id;

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    private $course_name;
    private $course_code;
    private $course_tutor;
    private $course_date;

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->course_name;
    }

    /**
     * @param mixed $course_name
     */
    public function setCourseName($course_name)
    {
        $this->course_name = $course_name;
    }

    /**
     * @return mixed
     */
    public function getCourseCode()
    {
        return $this->course_code;
    }

    /**
     * @param mixed $course_code
     */
    public function setCourseCode($course_code)
    {
        $this->course_code = $course_code;
    }

    /**
     * @return mixed
     */
    public function getCourseTutor()
    {
        return $this->course_tutor;
    }

    /**
     * @param mixed $course_tutor
     */
    public function setCourseTutor($course_tutor)
    {
        $this->course_tutor = $course_tutor;
    }

    /**
     * @return mixed
     */
    public function getCourseDate()
    {
        return $this->course_date;
    }

    /**
     * @param mixed $course_date
     */
    public function setCourseDate($course_date)
    {
        $this->course_date = $course_date;
    }


}