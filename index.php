<?php
    require_once "start.php";

    $CT->assign("courses", $CoursesManager->getSchedule());
    $CT->assign("institutes", $InstitutesManager->get());
    $CT->assign("groups", $GroupsManager->get());
    $CT->assign("educationForms", $EducationFormsManager->get());
    $CT->assign("educationCourses", $EducationCoursesManager->get());
    $CT->Show("index.tpl");
    
?>