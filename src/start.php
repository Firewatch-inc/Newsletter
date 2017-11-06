<?php

    require_once "engine/ctemplater.php";
    require_once "engine/ctools.php";
    require_once "newsletter/news.manager.class.php";

    $ROOT_PATH = $_SERVER['DOCUMENT_ROOT']."/src";
    $CT = new CTemplater(
        $ROOT_PATH."/templates/tpl", 
        $ROOT_PATH."/templates/tpl_c", 
        $ROOT_PATH."/templates/configs", 
        $ROOT_PATH."/templates/cache"
    );

    $DB = new PDO("mysql:dbname=newsletter;host=localhost", "root", "");
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $DB->exec("SET NAMES utf8");

    $NM = new NewsManager($DB);

?>