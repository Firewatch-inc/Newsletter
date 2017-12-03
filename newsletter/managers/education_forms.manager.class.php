<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/education_form.class.php";

    class EducationFormsManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($educationCourse)
        {
            return false;
        }

		public function get()
		{
            $db_education_forms = $this->query("SELECT * FROM `ListOfEducationForm`");

            $education_forms = array();
            foreach ($db_education_forms as $db_education_form) {
                $education_form = new EducationForm($db_education_form['caption']);
                $education_form->setId((int)$db_education_form['id_education_form']);
                $education_forms[] = $education_form;
            }

            return $education_forms;
        }

        public function getEducationFormCaption($education_form_id)
        {
            return $this->query("SELECT `caption` FROM `ListOfEducationForm` WHERE `id_education_form`=:id", [":id" => $education_form_id])[0]['caption'];
        }


        public function remove($education_course_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfEducationCourse` WHERE `id_education_course`=:id");
            $remove_query->bindValue(":id", $education_course_id);

            return $remove_query->execute();
        }

    }

?>
