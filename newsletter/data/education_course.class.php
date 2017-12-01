<?php

    class EducationCourse
    {
        private $id;
        private $number;

        public function __construct($number)
        {
            $this->number = $number;
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

        public function number()
        {
            return $this->number;
        }

    }

?>