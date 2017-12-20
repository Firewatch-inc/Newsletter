<?php

    require_once "../start.php";

    if (!empty(['institute']) && !empty($_POST['education_course']) && !empty($_POST['education_form'])) {

        $institute = (int)$_POST["institute"];
        $education_course = (int)$_POST["education_course"];
        $education_form = (int)$_POST["education_form"];

        $groups = $GroupsManager->getGroups($institute, $education_course, $education_form);

        $result_str = "";
        foreach ($groups as $group) {
            print_r($group);
            $result_str .= "<option value='".$group->id()."'>".$group->caption()." | ".$group->educationDirection()." | ".$group->specialty()."</option>";
        }

        echo $result_str;
    } else {
        echo "Не удалось найти группы";
    }

?>