<?php

    class MainSchedule
    {
        private $subjects;
        private $lecture_hall;

        public function __construct($subjects, $lecture_hall)
        {
            $this->subjects = $subjects;
            $this->lecture_hall = $lecture_hall;
        }

        public function subjects()
        {
            return $this->subjects;
        }

        public function first_subject()
        {
            return $this->subjects[0];
        }

        public function second_subject()
        {
            return $this->subjects[1];
        }

        public function lectureHall()
        {
            return $this->lecture_hall;
        }

    }

?>