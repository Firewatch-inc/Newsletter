<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/course.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/course_schedule.class.php";

    class CoursesManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($course)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `courses` (`caption`, `address`, `contactor`) VALUES (:caption, :address, :contactor) ");
            $add_query->bindValue(":caption", $course->caption());
            $add_query->bindValue(":address", $course->address());
            $add_query->bindValue(":contactor", $course->contactor());

            return $add_query->execute();
        }

		public function get()
		{
            $db_courses = $this->query("SELECT * FROM `courses` ORDER BY `caption`");

            $courses = array();
            foreach ($db_courses as $db_course) {
                $course = new Course($db_course['caption'], $db_course['address'], $db_course['contactor']);
                $course->setId((int)$db_course['id_course']);
                $courses[] = $course;
            }

            return $courses;
        }

        public function getSchedule()
        {
            $courses = $this->get();

            $schedule = array();
            foreach ($courses as $course) {
                $db_courses_schedule = $this->query("SELECT * FROM `vcoursesschedule` WHERE `id_course`=:id_course", [":id_course" => $course->id()]);
                

                $course_schedule = new CourseSchedule($course);
                $course_days = array("", "", "", "", "", "", "");
                foreach ($db_courses_schedule as $db_course_schedule) {
                    $course_days[(int)$db_course_schedule['day']-1] = $db_course_schedule['start_time']." - ".$db_course_schedule['end_time'];
                }

                $course_schedule->setDays($course_days);

                $schedule[] = $course_schedule;
            }
            
            return $schedule;
        }

        public function remove($course_id)
        {
            $add_query = $this->odbc->prepare("DELETE FROM `courses` WHERE `id_course`=:id");
            $add_query->bindValue(":id", $course_id);

            return $add_query->execute();
        }

    }

?>