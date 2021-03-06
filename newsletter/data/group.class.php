<?php

    class Group
    {
        private $id;
        private $caption;
        private $education_form;
        private $education_course;
        private $education_direction;
        private $specialty;
        private $institute;

        public function __construct($caption, $education_form, $education_course, $education_direction, $specialty, $institute)
        {
            $this->caption = $caption;
            $this->education_form = $education_form;
            $this->education_course = $education_course;
            $this->education_direction = $education_direction;
            $this->specialty = $specialty;
            $this->institute = $institute;
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

        public function caption()
        {
            return $this->caption;
        }

        public function educationForm()
        {
            return $this->education_form;
        }

        public function educationCourse()
        {
            return $this->education_course;
        }

        public function educationDirection()
        {
            return $this->education_direction;
        }

        public function specialty()
        {
            return $this->specialty;
        }

        public function institute()
        {
            return $this->institute;
        }

    }

?>