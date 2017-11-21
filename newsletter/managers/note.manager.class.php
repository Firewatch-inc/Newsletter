<?php
	
	require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/note.class.php";

    class NoteManager extends AbstractManager
    {
		
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
		
		public function add($note)
		{
			$add_query = $this->odbc->prepare("INSERT INTO `Notes` (`caption`, `content`, `date`) VALUES (:caption, :content, :date)");
			$add_query->bindValue(":caption", $note->caption());
			$add_query->bindValue(":content", $note->content());
			$add_query->bindValue(":date", $note->date());

			return $add_query->execute();
		}
		
		public function get()
		{
			$db_notes = $this->query("SELECT * FROM `Notes` ORDER BY `date`");

			$notes = array();
			foreach ($db_notes as $db_note) {
				$notes[] = new Note($db_note['caption'], $db_note['content'], $db_note['date']);
			}

			return $notes;
		}
		
		public function remove($id_note)
		{
			
		}
		
	}

?>