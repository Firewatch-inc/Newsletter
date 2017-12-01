<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

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
                $education_form = new class ($db_education_form['caption']) {

                    private $id;
                    private $caption;

                    public function __construct($caption)
                    {
                        $this->caption = $caption;
                        $this->id = 0;
                    }

                    public function id()
                    {
                        return $this->id;
                    }

                    public function setId($id)
                    {
                        if ($this->id === 0 && $id > 0) {
                            $this->id = $id;
                        }
                    }

                    public function caption()
                    {
                        return $this->caption;
                    }

                };
                $education_form->setId((int)$db_education_form['id_education_form']);
                $education_forms[] = $education_form;
            }

            return $education_forms;
        }

        public function remove($education_course_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfEducationCourse` WHERE `id_education_course`=:id");
            $remove_query->bindValue(":id", $education_course_id);

            return $remove_query->execute();
        }

    }

?>
