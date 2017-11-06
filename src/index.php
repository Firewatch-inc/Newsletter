<?php
    require_once "start.php";

    $NM->add(
        new News(0, "qwert", "cool", date("d.m.Y"))
    );

    $CT->assign("news", $NM->get());
    $CT->Show("index.tpl");
?>