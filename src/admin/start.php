<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/src/engine/ctemplater.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/src/engine/ctools.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/managers/news.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/managers/note.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/src/newsletter/data/user.class.php";

    $ROOT_PATH = $_SERVER['DOCUMENT_ROOT']."/src/admin";
    $CT = new CTemplater(
        $ROOT_PATH."/templates/tpl", 
        $ROOT_PATH."/templates/tpl_c", 
        $ROOT_PATH."/templates/configs", 
        $ROOT_PATH."/templates/cache"
    );

    $DB = new PDO("mysql:dbname=newsletter;host=localhost", "root", "");
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $DB->exec("SET NAMES utf8");

    $NewsManager = new NewsManager($DB);
    $NoteManager = new NoteManager($DB);

    session_start();
?>