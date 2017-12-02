<?php

    require_once "start.php";

    $CT->assign("data", $_SESSION['data']);
    $CT->assign("days", $DaysManager->getStudyDays());
    $CT->assign("pairs", $PairsManager->get());
    $CT->assign("main_schedule", $ScheduleManager->getSchedule($_SESSION['data']['group']));
    $CT->Show("main_schedule.tpl");

?>