<?php

    require_once "data/news.class.php";

    class NewsManager
    {
        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        private function query($sql, $params = array())
		{
			if (!empty($params)) {
                $query = $this->db->prepare($sql);
                $result = $query->execute($params);
                return ($result) ? $query->fetchAll(PDO::FETCH_ASSOC) : false;
            } else {
                return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            }
		}

        public function add($news)
        {
            if ($news instanceof News) {
                $insert_news_query = $this->db->prepare("INSERT INTO `news`
                    (`caption`, `content`, `date`)
                    VALUES 
                    (:news_caption, :news_content, :news_date)
                ");

                $insert_news_query->bindValue(":news_caption", $news->caption());
                $insert_news_query->bindValue(":news_content", $news->content());
                $insert_news_query->bindValue(":news_date", date_format(new DateTime($news->date()), "Y-m-d H:i:s"));

                return $insert_news_query->execute();
            }
        }

        public function get()
        {
            $db_news = $this->query("SELECT * FROM `news` ORDER BY `date`");

            $news = array();
            foreach ($db_news as $one_news) {
                $one_news['date'] = date_format(new DateTime($one_news['date']), "d.m.Y H:i:s");
                $news[] = new News($one_news['id_news'], $one_news['caption'], $one_news['content'], $one_news['date']);
            }

            return $news;
        }

        public function remove($id)
        {
            if ($id > 0) {
                
            }
        }

    }

?>