<?php

    require_once "newsletter/libs/classes/phpexcel.php";
    
    $DB = new PDO("mysql:dbname=newsletter;host=localhost", "root", "57RbhCjy");
    $DB->exec("SET NAMES `utf-8`");
    
    $xsl = PHPExcel_IOFactory::load("test.xlsx");
    $current_page = $xsl->getActiveSheet();

    $row = 12;
    $column = 1;

    $result = true;
    
    echo "<table border='1px' width='100%' cellpadding='10'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>№</th>";
    echo "<th>Caption</th>";
    echo "<th>Specialty</t>";
    echo "<th>Form education</t>";
    echo "<th>Education course</t>";
    echo "<th>Institute</t>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($row = $row, $i = 1; ($current_page->getCell("B".$row) != ""); $row++, $i++) {

        for ($course = 1; $course < 7; $course++) {
            if (preg_match("/^\d\d.\d\d.\d\d/", $current_page->getCell("B".$row))) {
                
                $specialty_id = $DB->query("SELECT `id_specialty` FROM `ListOfSpecialty` WHERE `caption`='".($current_page->getCell("D".$row)."'"))->fetchAll()[0][0];
                
                if ($specialty_id == null) {
                    $specialty_id = 1;
                }
                
                if ($specialty_id <= 1) {
                    $style = "background-color: red;";
                } else {
                    $style = "background-color: white;";
                }
                
                echo "<tr style='".$style."'>";
                echo "<td>".$i."</td>";
                echo "<td>".$current_page->getCell("B".$row)."</td>";
                echo "<td>".$current_page->getCell("D".$row)."</td>";
                echo "<td>".$specialty_id."</td>";
                echo "<td>".$current_page->getCell("F".$row)."</td>";
                echo "<td>".$course."</td>";
                echo "<td>1</td>";
                echo "</tr>";
                
                /*
                $insert = $DB->prepare("INSERT INTO `Groups` (`caption`, `id_institute`, `id_education_form`, `id_education_course`, `specialty`) VALUES (:caption, :institute, :education, :course, :spec)");
                
                $insert->bindValue(":caption", $current_page->getCell("B".$row));
                $insert->bindValue(":institute", 1);
                $insert->bindValue(":education", $current_page->getCell("F".$row));
                $insert->bindValue(":course", $course);
                $insert->bindValue(":spec", $specialty_id);
                
                $result *= $insert->execute();
                */
            }
        }
    

    }
    echo "</tbody>";
    echo "</table>";

    echo "<h1>".var_dump($result)."</h1>";
    
?>