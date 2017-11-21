<?php
    require_once "start.php";

    $CT->assign("schedule",$ScheduleManager->get());
    $CT->assign("notes", $NoteManager->get());
    $CT->Show("index.tpl");
    
?>