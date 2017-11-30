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
            $add_query = $this->odbc->prepare("INSERT INTO `Courses` (`caption`, `address`, `contactor`) VALUES (:caption, :address, :contactor) ");
            $add_query->bindValue(":caption", $course->caption());
            $add_query->bindValue(":address", $course->address());
            $add_query->bindValue(":contactor", $course->contactor());

            return $add_query->execute();
        }

		public function get()
		{
            $db_courses = $this->query("SELECT * FROM `Courses` ORDER BY `caption`");

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
                $db_courses_schedule = $this->query("SELECT * FROM `vCoursesSchedule` WHERE `id_course`=:id_course", [":id_course" => $course->id()]);
                
                $course_schedule = new CourseSchedule($course);
                $course_days = array("", "", "", "", "", "", "");
                foreach ($db_courses_schedule as $db_course_schedule) {
                    $start_time = trim($db_course_schedule['start_time']);
                    $end_time = trim($db_course_schedule['end_time']);

                    if (!empty($start_time) && (!empty($end_time))) {
                        $course_days[(int)$db_course_schedule['day']-1] = trim($start_time." - ".$end_time);
                    }
                }

                $course_schedule->setDays($course_days);

                $schedule[] = $course_schedule;
            }

            return $schedule;
        }

        public function setSchedule($schedules)
        {
            $return_result = true;
            foreach ($schedules as $schedule) {
                
                foreach ($schedule->days() as $number => $day) {
                    $result = $this->query("SELECT * FROM `ScheduleCourses` WHERE `id_course`=:id_course AND `day`=:day", [
                        ":id_course" => $schedule->course()->id(),
                        ":day" => ($number+1)
                    ]);
                    
                    $time = explode("-", $day);
                    $start_time = $time[0];
                    $end_time = $time[1];

                    if (empty($result)) {
                        $insert_query = $this->odbc->prepare("INSERT INTO `ScheduleCourses` (`id_course`, `day`, `start_time`, `end_time`) VALUES (:id_course, :day, :s_time, :e_time)");
                        
                        $insert_query->bindValue(":id_course", $schedule->course()->id());
                        $insert_query->bindValue(":day", ($number+1));
                        $insert_query->bindValue(":s_time", $start_time);
                        $insert_query->bindValue(":e_time", $end_time);

                        $return_result *= $insert_query->execute();
                    } else {

                        $update_query = $this->odbc->prepare("UPDATE `ScheduleCourses` SET `start_time`=:s_time, `end_time`=:e_time WHERE `id_course`=:id_course AND `day`=:day");

                        $update_query->bindValue(":s_time", (string)$start_time);
                        $update_query->bindValue(":e_time", (string)$end_time);
                        $update_query->bindValue(":id_course", $schedule->course()->id());
                        $update_query->bindValue(":day", ($number+1));

                        $return_result *= $update_query->execute();
                    }
                    
                }

            }

            return $return_result;
        }

        public function remove($course_id)
        {
            $add_query = $this->odbc->prepare("DELETE FROM `Courses` WHERE `id_course`=:id");
            $add_query->bindValue(":id", $course_id);

            return $add_query->execute();
        }

    }

?>
