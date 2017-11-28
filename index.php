<?php
    require_once "start.php";

    $CT->assign("updateInterval", $SettingsManager->get()["update_interval"] * 60 * 1000);
    $CT->assign("schedule",$ScheduleManager->getCurrentSchedule());
    $CT->assign("notes", $NoteManager->get());
    $CT->Show("index.tpl");
    
?>