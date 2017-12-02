<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/main_schedule.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/subject.class.php";

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
		    return false;
        }

        public function getSchedule($id_group)
        {
            $db_main_schedules = $this->query("SELECT * FROM `vMainSchedule` WHERE `id_group`=:id_group", [":id_group" => $id_group]);

            $main_schedules = array();
            $pair = 1;
            foreach ($db_main_schedules as $db_main_schedule) {
                $subjects = array(
                    new Subject(trim($db_main_schedule['subject_1'])),
                    new Subject(trim($db_main_schedule['subject_2']))
                );

                $main_schedules[$db_main_schedule['day']][$pair] = new MainSchedule($subjects, $db_main_schedule['lecture_hall']);
                $pair++;
            }

            return $main_schedules;
        }

    }

?>