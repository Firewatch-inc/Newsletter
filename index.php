<?php
    require_once "start.php";

    $CT->assign("courses", $CoursesManager->getSchedule());
    $CT->Show("main_schedule.tpl");
    
?>