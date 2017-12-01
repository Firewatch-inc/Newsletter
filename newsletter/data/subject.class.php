<?php

    class Subject
    {
        private $id;
        private $caption;

        public function __construct($caption)
        {
            $this->caption = $caption;
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

    }

?>