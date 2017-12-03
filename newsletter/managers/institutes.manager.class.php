<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/institute.class.php";

    class InstitutesManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($institute)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `ListOfInstitute` (`caption`, `short_caption`, `address`) VALUES (:caption, :short_caption, :address) ");
            $add_query->bindValue(":caption", $institute->caption());
            $add_query->bindValue(":short_caption", $institute->shortCaption());
            $add_query->bindValue(":address", $institute->address());

            return $add_query->execute();
        }

		public function get()
		{
            $db_institutes = $this->query("SELECT * FROM `ListOfInstitute` ORDER BY `caption`");

            $institutes = array();
            foreach ($db_institutes as $db_institute) {
                $institute = new Institute($db_institute['caption'], $db_institute['short_caption'], $db_institute['address']);
                $institute->setId((int)$db_institute['id_institute']);
                $institutes[] = $institute;
            }

            return $institutes;
        }

        public function getInstituteCaption($institute_id)
        {
            return $this->query("SELECT `caption` FROM `ListOfInstitute` WHERE `id_institute`=:id", [":id" => $institute_id])[0]['caption'];
        }

        public function remove($institute_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfInstitute` WHERE `id_institute`=:id");
            $remove_query->bindValue(":id", $institute_id);

            return $remove_query->execute();
        }

    }

?>
