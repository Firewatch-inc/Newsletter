<?php

    require_once "../start.php";

    if (!empty($DB)) {

        $get_new_news = $DB->prepare("SELECT * FROM `news` WHERE `id_news` > :last_news_id");
        $get_new_news->bindValue(":last_news_id", $_SESSION['last_news_id']);

        if ($get_new_news->execute()) {
            $db_news = $get_new_news->fetchAll(PDO::FETCH_ASSOC);

            $news = array();
            foreach ($db_news as $one_news) {
                
                $CT->assign("one_news", new News(
                    $one_news['caption'],
                    $one_news['content'],
                    $one_news['author'],
                    $one_news['date']
                ));
                
                $news .= $CT->fetch("one_news.tpl");
                $news = str_replace("Array", "", $news);
            }

            echo $news;
        }

    }

?>
