<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/engine/ctemplater.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/engine/ctools.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/schedule.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/courses.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/institutes.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/groups.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/subjects.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/pairs.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/days.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/speciaties.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/education_courses.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/education_forms.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/managers/settings.manager.class.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/data/user.class.php";

    $ROOT_PATH = $_SERVER['DOCUMENT_ROOT']."/admin";
    $CT = new CTemplater(
        $ROOT_PATH."/templates/tpl", 
        $ROOT_PATH."/templates/tpl_c", 
        $ROOT_PATH."/templates/configs", 
        $ROOT_PATH."/templates/cache"
    );

    try
    {      
      $DB = new PDO("mysql:dbname=newsletter;host=localhost", "newsletter", "15Letters");
      $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $DB->exec("SET NAMES utf8");
    } catch (PDOException $e) {
      die("Не возможно подключиться к базе данных");
    }

    $ScheduleManager = new ScheduleManager($DB);
    $CoursesManager = new CoursesManager($DB);
    $InstitutesManager = new InstitutesManager($DB);
    $GroupsManager = new GroupsManager($DB);
    $SubjectsManager = new SubjectsManager($DB);
    $PairsManager = new PairsManager($DB);
    $DaysManager = new DaysManager($DB);
    $SpecialtiesManager = new SpecialtiesManager($DB);
    $EducationCoursesManager = new EducationCoursesManager($DB);
    $EducationFormsManager = new EducationFormsManager($DB);
    $SettingsManager = new SettingsManager($DB);

    session_start();
?>