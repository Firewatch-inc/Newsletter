<?php

    class News
    {
        private $news_id;
        private $news_caption;
        private $news_content;
		private $news_author;
        private $news_date;

        public function __construct($news_caption, $news_content, $news_author, $news_date)
		{
            $this->news_id = 0;
            $this->news_caption = $news_caption;
            $this->news_content = $news_content;
            $this->news_author = $news_author;
			$this->news_date = $news_date;
        }

        public function id()
        {
            return $this->news_id;
        }
		
		public function setId($id)
		{
			if (($id > 0) && ($this->news_id === 0)) {
				$this->news_id = $id;
			}
		}

        public function caption()
        {
            return $this->news_caption;
        }

        public function setCaption($news_caption)
        {
            if (!empty($news_caption)) {
                $this->news_caption = $news_caption;
            }
        }

        public function content()
        {
            return $this->news_content;
        }

        public function setContent($news_content)
        {
            if (!empty($news_content)) {
                $this->news_content = $news_content;
            }
        }
		
		public function author()
		{
			return $this->news_author;
		}

        public function date()
        {
            return $this->news_date;
        }

    }

?>