<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/subject.class.php";

    class SubjectsManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($subject)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `ListOfSubject` (`caption`) VALUES (:caption) ");
            $add_query->bindValue(":caption", $subject->caption());

            return $add_query->execute();
        }

		public function get()
		{
            $db_subjects = $this->query("SELECT * FROM `ListOfSubject` ORDER BY `caption`");

            $subjects = array();
            foreach ($db_subjects as $db_subject) {
                $subject = new Subject($db_subject['caption']);
                $subject->setId((int)$db_subject['id_subject']);
                $subjects[] = $subject;
            }

            return $subjects;
        }

        public function getSubjects($subj)
        {
            $db_subjects = $this->query("SELECT * FROM `ListOfSubject` WHERE `caption` LIKE '%".$subj."%' LIMIT 10");

            $subjects = array();
            foreach ($db_subjects as $db_subject) {
                $subject = new Subject($db_subject['caption']);
                $subject->setId($db_subject['id_subject']);
                $subjects[] = $subject;
            }

            return $subjects;
        }

        public  function getLimitSubjects($start, $end)
        {
            $db_subjects = $this->query("SELECT * FROM `ListOfSubject` ORDER BY `caption` LIMIT ".$start.", ".$end);

            $subjects = array();
            foreach ($db_subjects as $db_subject) {
                $subject = new Subject($db_subject['caption']);
                $subject->setId($db_subject['id_subject']);
                $subjects[] = $subject;
            }

            return $subjects;
        }

        public function remove($subject_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfSubject` WHERE `id_subject`=:id");
            $remove_query->bindValue(":id", $subject_id);

            return $remove_query->execute();
        }

    }

?>
