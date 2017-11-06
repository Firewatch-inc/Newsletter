<?php
    require_once "start.php";

    $news = $NM->get();
    $last_id = end($news)->id();
    $_SESSION['last_news_id'] = $last_id;

    $CT->assign("news", $news);
    $CT->Show("index.tpl");
?>