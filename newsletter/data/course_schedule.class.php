<?php

    class CourseSchedule
    {

        private $course;
        private $days;

        public function __construct($course)
        {
            $this->course =$course;
            $this->days = array();
        }

        public function course()
        {
            return $this->course;
        }

        public function days()
        {
            return $this->days;
        }

        public function setDays($days)
        {
            $this->days = $days;
        }

    }

?>