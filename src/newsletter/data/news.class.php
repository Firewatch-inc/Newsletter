<?php

    class News
    {
        private $news_id;
        private $news_caption;
        private $news_content;
        private $news_date;

        public function __construct($news_id, $news_caption, $news_content, $news_date)
        {
            $this->news_id = $news_id;
            $this->news_caption = $news_caption;
            $this->news_content = $news_content;
            $this->news_date = $news_date;
        }

        public function id()
        {
            return $this->news_id;
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

        public function date()
        {
            return $this->news_date;
        }

        public function setDate($new_date)
        {
            if (!empty($new_date)) {
                $this->new_date = $new_date;
            }
        }

    }

?>