<?php

    require_once "../start.php";

    if (!empty($_POST['interval'])) {
        $start = $_POST['interval']['start'];
        $end = $_POST['interval']['end'];

        $subjects = $SubjectsManager->getLimitSubjects($start, $end);
        $result = "";
        foreach ($subjects as $subject) {
            $result .= "<tr>";
            $result .= "<td>".$subject->id()."</td>";
            $result .= "<td>".$subject->caption()."</td>";
            $result .= "<td>";
            $result .= "<div class='ui checkbox'>";
            $result .= "<input type='checkbox' value='".$subject->id()."' name='subjects[]'>";
            $result .= "<label></label>";
            $result .= "</div>";
            $result .= "</td>";
            $result .= "</tr>";
        }

        echo $result;
    } elseif (!empty($_POST['subject'])) {
        $subject = (string)$_POST['subject'];

        $subjects = $SubjectsManager->getSubjects($subject);
        $result = "";
        foreach ($subjects as $subject) {
            $result .= "<tr>";
            $result .= "<td>".$subject->id()."</td>";
            $result .= "<td>".$subject->caption()."</td>";
            $result .= "<td>";
            $result .= "<div class='ui checkbox'>";
            $result .= "<input type='checkbox' value='".$subject->id()."' name='subjects[]'>";
            $result .= "<label></label>";
            $result .= "</div>";
            $result .= "</td>";
            $result .= "</tr>";
        }

        echo $result;

    }

?>