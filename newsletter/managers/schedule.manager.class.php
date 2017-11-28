<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

    class ScheduleManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($schedule)
        {
            if (!empty($schedule)) {
                $update_query = $this->odbc->prepare("UPDATE `Schedule` SET `data`=:schedule WHERE `id_schedule`=:schedule_id");
                $update_query->bindValue(":schedule", $schedule['schedule']);
                $update_query->bindValue(":schedule_id", $schedule['schedule_id']);
                return $update_query->execute();
            }
        }

		public function get()
		{
            $db_schedule = $this->query("SELECT * FROM `Schedule`");
            $db_time = $this->query("SELECT * FROM `ListOfPair`");

            if (!empty($db_schedule)) {

                $all_schedule = array();
                foreach ($db_schedule as $sch) {

                    $schedule = json_decode($sch["data"]);
    
                    $time = array();
                    $i = 0;
                    foreach ($db_time as $data) {
                        $time[$data["start_time"]." - ".$data["end_time"]] = $schedule[$i];
                        $i++;
                    }
    
                    $all_schedule[$sch['date']."_".$sch['id_schedule']] = $time;
                }

                return $all_schedule;
            } else {
                throw new Exception("Incorrect schedule data");   
            }
        }
        
        public function getCurrentSchedule()
        {
            $db_schedule = $this->query("SELECT * FROM `Schedule` WHERE `date`=DATE(NOW())");
            $db_time = $this->query("SELECT * FROM `ListOfPair`");

            if (!empty($db_schedule)) {
                $schedule = json_decode($db_schedule[0]["data"]);
            }
            
            $time = array();
            $i = 0;
            foreach ($db_time as $data) {
                $time[$data["start_time"]." - ".$data["end_time"]] = $schedule[$i];
                $i++;
            }

            return $time;
        }

        public function remove($data)
        {

        }

    }

?>