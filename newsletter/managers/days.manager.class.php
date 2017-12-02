<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/day.class.php";

    class DaysManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($pair)
        {
            return false;
        }

        public function getStudyDays()
        {
            $days = $this->get();
            array_pop($days);
            return $days;
        }

		public function get()
		{
            $db_days = $this->query("SELECT * FROM `ListOfDays` ORDER BY `id_day`");

            $days = array();
            foreach ($db_days as $db_day) {
                $day = new Day($db_day['caption'], $db_day['short_caption']);
                $day->setId((int)$db_day['id_day']);
//                $dat->setNumber($db_days['']);
                $days[] = $day;
            }

            return $days;
        }

    }

?>
