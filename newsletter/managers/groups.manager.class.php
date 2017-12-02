<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/group.class.php";

    class GroupsManager extends AbstractManager
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
            $db_groups = $this->query("SELECT * FROM `vGroups` ORDER BY `group_caption`");

            $groups = array();
            foreach ($db_groups as $db_group) {
                $group = new Group($db_group['group_caption'], $db_group['education_form_caption'], $db_group['education_course'], $db_group['specialty_caption']);
                $group->setId((int)$db_group['id_group']);
                $groups[] = $group;
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

        public function remove($group_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `Groups` WHERE `id_group`=:id");
            $remove_query->bindValue(":id", $group_id);

            return $remove_query->execute();
        }

    }

?>
