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
    echo "<th>Education direction</t>";
    echo "<th>Specialty</t>";
    echo "<th>Form education</t>";
    echo "<th>Course</t>";
    echo "<th>Institute</t>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $count = 0;
    for ($row = $row, $i = 1; ($current_page->getCell("B".$row) != ""); $row++) {
        
        $form_education_id = $DB->query("SELECT `id_education_form` FROM `ListOfEducationForm` WHERE `caption`='".(explode(" ", $current_page->getCell("F".$row))[0]."'"))->fetchAll()[0][0];
        
        $result *= $DB->exec("INSERT INTO `ListOfSpecialty` (`caption`, `code`) VALUES ('".trim($current_page->getCell("D".$row))."', '".$current_page->getCell("B".$row)."');");
        
        for ($course = 1; $course < 7; $course++, $i++) {
            if (preg_match("/^\d\d.\d\d.\d\d/", $current_page->getCell("B".$row))) {
                                
                echo "<tr style='".$style."'>";
                echo "<td>".$i."</td>";
                echo "<td>".$current_page->getCell("B".$row)."</td>";
                echo "<td>".$current_page->getCell("C".$row)."</td>";
                echo "<td>".$current_page->getCell("D".$row)."</td>";
                echo "<td>".$form_education_id."</td>";
                echo "<td>".$course."</td>";
                echo "<td>1</td>";
                echo "</tr>";
                
                $count += $DB->exec("
                    INSERT INTO `Groups` (`caption`, `id_institute`, `education_direction`, `specialty`, `id_education_form`, `id_education_course`) VALUES ('".$current_page->getCell("B".$row)."', 1, '".$current_page->getCell("C".$row)."', '".$current_page->getCell("D".$row)."', '".$form_education_id."', ".$course.")
                ");
                
                // print_r($DB->errorInfo());
            
            }
        }
        
    }
    echo "</tbody>";
    echo "</table>";
    
    echo "<h1>".$count."/252</h1>";
    
?>