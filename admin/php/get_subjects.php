<?php

    require_once "../start.php";

    if (!empty($_POST['subject'])) {
        $subj = $_POST['subject'];

        $subjects = $SubjectsManager->getSubjects($subj);
        $result = "";
        foreach ($subjects as $subject) {
            $result .= '<option value="'.$subject->id().'">'.$subject->caption()."</option>";
        }

        echo $result;
    }

?>