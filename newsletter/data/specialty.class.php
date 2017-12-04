<?php

    class Specialty
    {
        private $id;
        private $caption;
        private $code;

        public function __construct($caption, $code)
        {
            $this->caption = $caption;
            $this->code = $code;
        }

        public function id()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function caption()
        {
            return $this->caption;
        }

        public function code()
        {
            return $this->code;
        }

    }

?>