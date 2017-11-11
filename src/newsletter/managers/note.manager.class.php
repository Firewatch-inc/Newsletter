<?php
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/data/note.class.php";

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