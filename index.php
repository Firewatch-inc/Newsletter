<?php
    require_once "start.php";

    $CT->assign("courses", $CoursesManager->getSchedule());
    $CT->assign("institutes", $InstitutesManager->get());
    $CT->assign("groups", $GroupsManager->get());
    $CT->assign("educationForms", $EducationFormsManager->get());
    $CT->assign("educationCourses", $EducationCoursesManager->get());
    $CT->Show("index.tpl");

    if (!empty($_SESSION['data'])) {
        unset($_SESSION['data']);
    }

    if (!empty($_POST['showMainScheduleButton'])) {
        $_SESSION['data'] = array(
            "institute" => $_POST['institute'],
            "education_course" => $_POST['educationCourse'],
            "group" => $_POST['group'],
            "education_form" => $_POST['group']
        );

        CTools::redirect("main_schedule.php");
    }
    
?>