<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/pair.class.php";

    class PairsManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($pair)
        {
            $add_query = $this->odbc->prepare("INSERT INTO `ListOfPair` (`number`, `start_time`, `end_time`) VALUES (:number, :start_time, :end_time) ");
            $add_query->bindValue(":number", $subject->number());
            $add_query->bindValue(":start_time", $subject->startTime());
            $add_query->bindValue(":end_time", $subject->endTime());

            return $add_query->execute();
        }

		public function get()
		{
            $db_pairs = $this->query("SELECT * FROM `ListOfPair` ORDER BY `number`");


            $pairs = array();
            foreach ($db_pairs as $db_pair) {
                $pair = new Pair($db_pair['number'], $db_pair['start_time'], $db_pair['end_time']);
                $pair->setId((int)$db_pair['id_pair']);
                $pairs[] = $pair;
            }

            return $pairs;
        }

        public function remove($pair_id)
        {
            $remove_query = $this->odbc->prepare("DELETE FROM `ListOfPair` WHERE `id_pair`=:id");
            $remove_query->bindValue(":id", $pair_id);

            return $remove_query->execute();
        }

    }

?>
