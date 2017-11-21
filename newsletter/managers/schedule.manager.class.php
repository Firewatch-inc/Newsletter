<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

    class ScheduleManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($schedule_json)
        {
            if (!empty($schedule_json)) {
                $update_query = $this->odbc->prepare("UPDATE `Schedule` SET `data`=:schedule_json");
                $update_query->bindValue(":schedule_json", $schedule_json);
                return $update_query->execute();
            }
        }

		public function get()
		{
            $db_schedule = $this->query("SELECT `data` FROM `Schedule`");
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