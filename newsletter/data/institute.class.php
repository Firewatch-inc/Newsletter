<?php

    class Institute
    {
        private $id;
        private $caption;
        private $short_caption;
        private $address;

        public function __construct($caption, $short_caption, $address)
        {
            $this->caption = $caption;
            $this->short_caption = $short_caption;
            $this->address = $address;
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

        public function shortCaption()
        {
            return $this->short_caption;
        }

        public function address()
        {
            return $this->address;
        }


    }

?>