<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/specialty.class.php";

    class SpecialtiesManager extends AbstractManager
    {
        
        public function add($specialty)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `ListOfSpecialty` (`caption`, `code`) VALUES (:caption, :code)");
            $add_query->bindValue(":caption", $specialty->caption());
            $add_query->bindValue(":code", $specialty->code());
            
            return $add_query->execute();
        }
        
        public function get()
        {
            $db_specialties = $this->query("SELECT * FROM `ListOfSpecialty`");

            $specialties = array();
            foreach ($db_specialties as $db_specialty) {
                $specialty = new Specialty($db_specialty['caption'], $db_specialty['code']);
                $specialty->setId($db_specialty['id_specialty']);
                $specialties[] = $specialty;
            }

            return $specialties;
        }

        public function remove($specialty_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfSpecialty` WHERE `id_specialty`=:id");
            $remove_query->bindValue(":id", $specialty_id);

            return $remove_query->execute();
        }

    }

?>