<?php

    class MainSchedule
    {
        private $pairs;
        private $subjects;
        private $lecture_hall;

        public function __construct($pairs, $subjects, $lecture_hall)
        {
            $this->pairs = $pairs;
            $this->subjects = $subjects;
            $this->lecture_hall = $lecture_hall;
        }

        public function pairs()
        {
            return $this->pairs;
        }

        public function subjects()
        {
            return $this->subjects;
        }

        public function lectureHall()
        {
            return $this->lecture_hall;
        }

    }

?>