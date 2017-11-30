<?php

    class Course
    {
        private $id;
        private $caption;
        private $address;
        private $contactor;

        public function __construct($caption, $address, $contactor)
        {
            $this->caption = $caption;
            $this->address = $address;
            $this->contactor = $contactor;
            $this->id = 0;
        }

        public function id()
        {
            return $this->id;
        }

        public function setId($id)
        {
            if (($this->id === 0) && ($id > 0)) {
                $this->id = $id;
            }
        }

        public function caption()
        {
            return $this->caption;
        }

        public function address()
        {
            return $this->address;
        }

        public function contactor()
        {
            return $this->contactor;
        }

    }

?>