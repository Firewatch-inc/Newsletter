<?php

    class Group
    {
        private $id;
        private $caption;
        private $education_form;
        private $education_course;
        private $specialty;

        public function __construct($caption, $education_form, $education_course, $specialty)
        {
            $this->caption = $caption;
            $this->education_form = $education_form;
            $this->education_course = $education_course;
            $this->specialty = $specialty;
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

        public function specialty()
        {
            return $this->specialty;
        }

    }

?>