<?php
	
	class Note
	{
		private $note_id;
		private $note_header;
		private $note_content;
		private $note_date;
		
		public function __construct($note_header, $note_content, $note_date)
		{
			$this->note_id = 0;
			$this->note_header = $note_header;
			$this->note_content = $note_content;
			$this->note_date = $note_date;
		}
		
		public function id()
		{
			return $this->note_id;
		}
		
		public function setId($id)
		{
			if (($id > 0) && ($this->note_id === 0)) {
				$this->note_id = $id;
			}
		}
		
		public function header()
		{
			return $this->header;
		}
		
		public function setHeader($header)
		{
			if (!empty($header)) {				
				$this->header = $header;
			}
		}
		
		public function content()
		{
			return $this->content;
		}
		
		public function setContent($content)
		{
			if (!empty($content)) {				
				$this->content = $content;
			}
		}
		
		public function date()
		{
			return $this->note_date;
		}
		
		public function setDate($date)
		{
			$this->note_date = $date;
		}
		
	}

?>