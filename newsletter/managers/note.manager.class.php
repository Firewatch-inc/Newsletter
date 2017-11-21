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
			
		}
		
		public function get()
		{
			
		}
		
		public function remove($id_note)
		{
			
		}
		
	}

?>