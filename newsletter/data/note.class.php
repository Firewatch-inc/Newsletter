<?php
	
	class Note
	{
		private $note_id;
		private $note_caption;
		private $note_content;
		private $note_date;
		
		public function __construct($note_caption, $note_content, $note_date)
		{
			$this->note_id = 0;
			$this->note_caption = $note_caption;
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
		
		public function caption()
		{
			return $this->note_caption;
		}
		
		public function setCaption($note)
		{
			if (!empty($note)) {				
				$this->note_caption = $note;
			}
		}
		
		public function content()
		{
			return $this->note_content;
		}
		
		public function setContent($content)
		{
			if (!empty($content)) {				
				$this->note_content = $content;
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