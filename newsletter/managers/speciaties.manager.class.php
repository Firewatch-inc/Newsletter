<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

    
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
            
        }
        
    }

?>