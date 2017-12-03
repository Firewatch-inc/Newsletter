<?php

    require_once "start.php";

    $CT->assign("data", $_SESSION['data']);

    $CT->assign("institute", $InstitutesManager->getInstituteCaption($_SESSION['data']['institute']));
    $CT->assign("group", $GroupsManager->getGroupCaption($_SESSION['data']['group']));
    $CT->assign("education_form", $EducationFormsManager->getEducationFormCaption($_SESSION['data']['education_form']));
    $CT->assign("days", $DaysManager->getStudyDays());
    $CT->assign("pairs", $PairsManager->get());
    $CT->assign("main_schedule", $ScheduleManager->getSchedule($_SESSION['data']['group']));
    $CT->Show("main_schedule.tpl");

?>