<?php
    require_once "start.php";

    $CT->assign("courses", $CoursesManager->getSchedule());
    $CT->assign("institutes", $InstitutesManager->get());
    $CT->assign("groups", $GroupsManager->get());
    $CT->assign("educationForms", $EducationFormsManager->get());
    $CT->assign("educationCourses", $EducationCoursesManager->get());
    
    $CT->assign("count_institutes", $DB->query("SELECT COUNT(*) as count FROM `ListOfInstitute`")->fetchAll()[0]['count']);
    $CT->assign("count_groups", $DB->query("SELECT COUNT(*) as count FROM `Groups`")->fetchAll()[0]['count']);
    $CT->assign("count_specs", count($DB->query("SELECT DISTINCT `specialty` as co FROM `Groups`")->fetchAll(PDO::FETCH_ASSOC)));
    $CT->assign("count_subjects", $DB->query("SELECT COUNT(*) as count FROM `ListOfSubject`;")->fetchAll()[0]['count']);
    
    $CT->Show("index.tpl");

    if (!empty($_SESSION['data'])) {
        unset($_SESSION['data']);
    }

    if (!empty($_POST['showMainScheduleButton'])) {
        $_SESSION['data'] = array(
            "institute" => $_POST['institute'],
            "education_course" => $_POST['education_course'],
            "group" => $_POST['group'],
            "education_form" => $_POST['education_form']
        );

        CTools::redirect("main_schedule.php");
    }
    
?>