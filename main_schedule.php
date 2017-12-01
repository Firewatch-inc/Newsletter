<?php

    require_once "start.php";

    $CT->assign("data", $_SESSION['data']);
    $CT->assign("days", $DaysManager->getStudyDays());
    $CT->assign("pairs", $PairsManager->get());
    $CT->Show("main_schedule.tpl");

?>