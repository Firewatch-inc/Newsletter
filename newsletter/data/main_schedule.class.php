<?php

    class MainSchedule
    {
        private $id;
        private $subjects;
        private $lecture_hall;
        private $teachers;

        public function __construct($subjects, $lecture_hall, $teachers)
        {
            $this->subjects = $subjects;
            $this->lecture_hall = $lecture_hall;
            $this->teachers = $teachers;
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

        public function first_subject()
        {
            return $this->subjects[0];
        }

        public function second_subject()
        {
            return $this->subjects[1];
        }

        public function subjects()
        {
            return $this->subjects;
        }
        
        public function lectureHall_1()
        {
            return $this->lecture_hall[0];
        }
        
        public function lectureHall_2()
        {
            return $this->lecture_hall[1];
        }

        public function lectureHall()
        {
            return $this->lecture_hall;
        }
        
        public function teacher_1()
        {
            return $this->teachers[0];
        }
        
        public function teacher_2()
        {
            return $this->teachers[1];
        }

        public function teachers()
        {
            return $this->teachers;
        }
        
        public function teacher()
        {
            return $this->teacher;
        }

    }

?>