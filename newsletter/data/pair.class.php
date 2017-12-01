<?php

    class Pair
    {
        private $id;
        private $number;
        private $start_time;
        private $end_time;

        public function __construct($number, $start_time, $end_time)
        {
            $this->number = $number;
            $this->start_time = $start_time;
            $this->end_time = $end_time;
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

        public function startTime()
        {
            return $this->start_time;
        }

        public function endTime()
        {
            return $this->end_time;
        }

    }

?>