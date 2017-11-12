<?php

	require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/abstract.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/data/news.class.php";

    class NewsManager extends AbstractManager
    {

        public function __construct($odbc)
        {
			parent::__construct($odbc);
        }

        public function add($news)
        {
            if ($news instanceof News) {
                $insert_news_query = $this->odbc->prepare("call addNews(:news_caption, :news_content, :news_author, :news_date)
                ");
                
                $insert_news_query->bindValue(":news_caption", $news->caption());
                $insert_news_query->bindValue(":news_content", $news->content());
                $insert_news_query->bindValue(":news_author", $news->author());
                $insert_news_query->bindValue(":news_date", date_format(new DateTime($news->date()), "Y-m-d H:i:s"));

                return $insert_news_query->execute();
            }
        }
        
        public function getAll()
        {
            $db_news = parent::query("SELECT * FROM `news`");

            $news = array();
            foreach ($db_news as $one_news) {
                $new_news = new News(
                    $one_news['caption'], 
                    $one_news['content'], 
                    $one_news['author'], 
                    $one_news['date']
                );
                $new_news->setId($one_news['id_news']);
                
                $news[] = $new_news;
            }

            return $news;
        }

        public function get()
        {
            $db_news = parent::query("SELECT * FROM `vNews`");

            $news = array();
            foreach ($db_news as $one_news) {
                $news[] = new News(
                    $one_news['n_caption'], 
                    $one_news['n_content'], 
                    $one_news['n_author'], 
                    $one_news['n_date']
                );
            }

            return $news;
        }

        public function remove($id)
        {
            if ($id > 0) {
                $remove_news_query = $this->odbc->prepare("call removeNews(:n_id)");
                $remove_news_query->bindValue(":n_id", $id);
                
                return $remove_news_query->execute();
            }
        }

    }

?>