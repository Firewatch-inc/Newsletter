<?php

    require_once "../start.php";

    header("Content-type: application/json");

    if (!empty($DB)) {

        $get_new_news = $DB->prepare("SELECT * FROM `news` WHERE `id_news` > :last_news_id");
        $get_new_news->bindValue(":last_news_id", $_SESSION['last_news_id']);

        if ($get_new_news->execute()) {
            $db_news = $get_new_news->fetchAll(PDO::FETCH_ASSOC);

            $news = array();
            foreach ($db_news as $one_news) {
                
                $CT->assign("caption", $one_news['caption']);
                $CT->assign("content", $one_news['content']);
                $CT->assign("date", $one_news['date']);

                $news[] = $CT->fetch("one_news.tpl");
            }

            echo "<pre>";
            print_r($db_news);
            echo "</pre>";

        }

    }

?>

