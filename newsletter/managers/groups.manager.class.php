<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/group.class.php";

    class GroupsManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($group)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `Groups` (`caption`, `id_institute`, `id_education_form`, `id_education_course`, `specialty`) VALUES (:caption, :id_institute, :id_education_form, :id_education_course, :specialty) ");
            $add_query->bindValue(":caption", $group->caption());
            $add_query->bindValue(":id_institute", $group->institute());
            $add_query->bindValue(":id_education_form", $group->educationForm());
            $add_query->bindValue(":id_education_course", $group->educationCourse());
            $add_query->bindValue(":specialty", $group->specialty());

            return $add_query->execute();
        }

		public function get()
		{
            $db_groups = $this->query("SELECT * FROM `vGroups` ORDER BY `group_caption`, `education_course`");

            $groups = array();
            foreach ($db_groups as $db_group) {
                $group = new Group($db_group['group_caption'], $db_group['education_form_caption'], $db_group['education_course'], $db_group['specialty_caption'], $db_group['institute_caption']);
                $group->setId((int)$db_group['id_group']);
                $groups[$db_group['institute_caption']][$db_group['education_course']][] = $group;
            }

            return $groups;
        }

        public function getGroups($institute, $education_course, $education_form)
        {
            $db_groups = $this->query("SELECT * FROM `vGroups` WHERE `institute`=:institute AND `education_form`=:education_form AND `education_course`=:education_course",
                [":institute" => $institute, ":education_form" => $education_form,  ":education_course" => $education_course]);

            $groups = array();
            foreach ($db_groups as $db_group) {
                $group = new Group($db_group['group_caption'], $db_group['education_form_caption'], $db_group['education_course'], $db_group['specialty_caption']);
                $group->setId($db_group['id_group']);
                $groups[] = $group;
            }

            return $groups;
        }

        public function getGroupCaption($group_id)
        {
            return $this->query("SELECT CONCAT(`group_caption`, ' | ', `specialty_caption`) as caption FROM `vGroups` WHERE `id_group`=:id", [":id" => $group_id])[0]['caption'];
        }

        public function remove($group_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `Groups` WHERE `id_group`=:id");
            $remove_query->bindValue(":id", $group_id);

            return $remove_query->execute();
        }

    }

?>
