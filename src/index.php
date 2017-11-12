<?php
    require_once "start.php";

    $news = $NM->get();
    
	if (!empty($news)) {
		$last_id = end($news)->id();
		$_SESSION['last_news_id'] = $last_id;		
	}	

    $CT->assign("news", $news);
    $CT->Show("index.tpl");
?>