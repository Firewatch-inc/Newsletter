<?php
    require_once "start.php";

    $CT->assign("courses", $CoursesManager->getSchedule());
    $CT->Show("index.tpl");
    
?>