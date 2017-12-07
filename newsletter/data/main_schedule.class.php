<?php

    class MainSchedule
    {
        private $id;
        private $subjects;
        private $lecture_hall;
        private $teacher;

        public function __construct($subjects, $lecture_hall, $teacher)
        {
            $this->subjects = $subjects;
            $this->lecture_hall = $lecture_hall;
            $this->teacher = $teacher;
            $this->id = 0;
        }

        public function id()
        {
            return $this->id;
        }

        public function setId($id)
        {
            if ($this->id === 0 && $id > 0) {
                $this->id = $id;
            }
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

        public function teacher()
        {
            return $this->teacher;
        }

    }

?>