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
            $check_query = $this->query("SELECT * FROM `ScheduleMain` WHERE `id_group`=:group AND `day`=:day AND `id_pair`=:pair",
                [":group" => $main_schedule['group'], ":day" => $main_schedule['day'], ":pair" => $main_schedule['pair']]);

            if (!empty($check_query)) {
                $update = $this->odbc->prepare("UPDATE `ScheduleMain` SET `id_subject_1`=:subject_1, `id_subject_2`=:subject_2, `lecture_hall`=:lecture_hall, `teacher`=:teacher  WHERE `id_group`=:group AND `day`=:day AND `id_pair`=:pair");
                $update->bindValue(":group", $main_schedule['group']);
                $update->bindValue(":day", $main_schedule['day']);
                $update->bindValue(":pair", $main_schedule['pair']);
                $update->bindValue(":subject_1", $main_schedule['subject_1']);
                $update->bindValue(":subject_2", $main_schedule['subject_2']);
                $update->bindValue(":lecture_hall", $main_schedule['lecture_hall']);
                $update->bindValue(":teacher", $main_schedule['teacher']);

                return $update->execute();
            } else {
                $insert_into = $this->odbc->prepare("INSERT INTO `ScheduleMain` (`id_group`, `day`, `id_pair`, `id_subject_1`, `id_subject_2`, `lecture_hall`, `teacher`) VALUES (:group, :day, :pair, :subject_1, :subject_2, :lecture_hall, :teacher)");
                $insert_into->bindValue(":group", $main_schedule['group']);
                $insert_into->bindValue(":day", $main_schedule['day']);
                $insert_into->bindValue(":pair", $main_schedule['pair']);
                $insert_into->bindValue(":subject_1", $main_schedule['subject_1']);
                $insert_into->bindValue(":subject_2", $main_schedule['subject_2']);
                $insert_into->bindValue(":lecture_hall", $main_schedule['lecture_hall']);
                $insert_into->bindValue(":teacher", $main_schedule['teacher']);

                return $insert_into->execute();
            }
        }

		public function get()
		{
		    return false;
        }

        public function getSchedule($id_group)
        {
            $db_main_schedules = $this->query("SELECT * FROM `vMainSchedule` WHERE `id_group`=:id_group", [":id_group" => $id_group]);

            $main_schedules = array();
            foreach ($db_main_schedules as $db_main_schedule) {
                $subjects = array(
                    new Subject(trim($db_main_schedule['subject_1'])),
                    new Subject(trim($db_main_schedule['subject_2']))
                );
                $lecture_halls = array(
                    $db_main_schedule['lecture_hall_1'],
                    $db_main_schedule['lecture_hall_2'],
                );

                $main_schedule =  new MainSchedule($subjects, $lecture_halls, $db_main_schedule['teacher']);
                $main_schedule->setId($db_main_schedule['id_schedule_main']);

                $main_schedules[$db_main_schedule['day']][] = $main_schedule;
            }

            return $main_schedules;
        }

    }

?>