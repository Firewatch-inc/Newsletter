<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/education_course.class.php";

    class EducationCoursesManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($educationCourse)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `ListOfEducationCourse` (`number`) VALUES (:number)");
            $add_query->bindValue(":number", $educationCourse->number());

            return $add_query->execute();
        }

		public function get()
		{
            $db_education_courses = $this->query("SELECT * FROM `ListOfEducationCourse` ORDER BY `number`");

            $education_courses = array();
            foreach ($db_education_courses as $db_education_course) {
                $education_course = new EducationCourse($db_education_course['number']);
                $education_course->setId((int)$db_education_course['id_education_course']);
                $education_courses[] = $education_course;
            }

            return $education_courses;
        }

        public function remove($education_course_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfEducationCourse` WHERE `id_education_course`=:id");
            $remove_query->bindValue(":id", $education_course_id);

            return $remove_query->execute();
        }

    }

?>
