<?php

    class Day
    {
        private $id;
        private $caption;
        private $short_caption;

        public function __construct($caption, $short_caption)
        {
            $this->caption = $caption;
            $this->short_caption = $short_caption;
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
    }

?>