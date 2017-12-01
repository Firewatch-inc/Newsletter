<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

    class ScheduleManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($main_schedule)
        {
            
        }

		public function get()
		{
            
        }

        public function getSchedule($institute, $education_course, $group, $education_form)
        {
            $db_main_schedule = $this->query("");


            return array();
        }

    }

?>