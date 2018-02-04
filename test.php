<?php
    
    require_once "newsletter/libs/phpexcel.php";
    
    $DB = new PDO("mysql:dbname=newsletter;host=localhost", "root", "");
    $DB->exec("SET NAMES `utf-8`");
    

    try
    {
        $xsl = PHPExcel_IOFactory::load("rz_ibirh_1_o.xlsx");
        $current_page = $xsl->getActiveSheet();
        
        /*
        echo "<pre>";
        print_r($xsl->getActiveSheet()->getCellCollection());
        echo "</pre>";
        */

        $column = "A";
        $row    = 17;

        $days = [
            "Понедельник",
            "Вторник",
            "Среда",
            "Четверг",
            "Пятница",
            "Суббота"
        ];

        $borders = [];

        $schedule = [
            "Понедельник" => [],
            "Вторник"     => [],
            "Среда"       => [],
            "Четверг"     => [],
            "Пятница"     => [],
            "Суббота"     => []
        ];


        echo "<table width='100%' border='1'>";
        foreach ($xsl->getActiveSheet()->getCellCollection() as $cell) {
            $cell_value = $current_page->getCell($cell)->getValue();
            
            switch ($cell) {
                case "C13": {
                    $schedule['group']['code'] = explode(" ", $current_page->getCell($cell)->getValue())[0];
                    $schedule['group']['education_direction'] = str_replace("\"", "", explode(" ", $current_page->getCell($cell)->getValue())[1]);
                } break;
                case "D13": { 
                    $schedule['group']['spec'] = trim(str_replace('\n', "", $current_page->getCell($cell)->getValue()));
                } break;
                case "E13": {
                    $schedule['group']['education_form'] = $current_page->getCell($cell)->getValue();
                } break;
            }

            if (in_array($cell_value, $days)) {
                $borders[$cell_value] = $cell;
            }

            if (!empty($cell_value)) {
                echo "<tr>";
                echo "<td>".$cell."</td>";
                echo "<td>".($current_page->getCell($cell)->getValue())."</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
        
        $s_column = $borders['Понедельник'][0];
        $s_row    = $borders['Понедельник'][1].$borders['Понедельник'][2];
        $e_row    = $borders['Суббота'][1].$borders['Суббота'][2];

        echo "<table>";
        for ($i = $s_row; $i < $e_row; $i++) {
            echo "<tr>";
            for ($j = $s_column; $j <= "L"; $j++) {
                echo "<td>".($current_page->getCell($j.$i)->getValue())."</td>";
                if ($j === "G") {
                    
                }
            }
            echo "</tr>";
        }
        echo "</table>";


        echo "<pre>";
        print_r($borders);
        echo "</pre>";
        

        //A17 to F16


      //  echo "INSERT INTO `ScheduleMain` (`id_group`, `day`, `id_pair`, `id_subject_1`, `id_subject_2`, `lecture_hall_1`, `lecture_hall_2`, `teacher_1`, `teacher_2`) VALUES (\"".explode(" ", $current_page->getCell("C13"))[0]."\", :day, :pair, :subject_1, :subject_2, :lecture_hall_1, :lecture_hall_2, :teacher_1, :teacher_2)";

        

    } catch (Exception $e) {
        echo $e->getMessage()."<br>";
        exit;
    }
    




/*

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
    for ($row = $row, $i = 1; ($current_page->getCell("A".$row) != ""); $row++) {
        
        $form_education_id = $DB->query("SELECT `id_education_form` FROM `ListOfEducationForm` WHERE `caption`='".(explode(" ", $current_page->getCell("E".$row))[0]."'"))->fetchAll()[0][0];
        
        for ($course = 1; $course < 7; $course++, $i++) {
            if (preg_match("/^\d\d.\d\d.\d\d/", $current_page->getCell("A".$row))) {
                
                echo "<tr style='".$style."'>";
                echo "<td>".$i."</td>";
                echo "<td>".$current_page->getCell("A".$row)."</td>";
                echo "<td>".$current_page->getCell("B".$row)."</td>";
                echo "<td>".$current_page->getCell("C".$row)."</td>";
                echo "<td>".$form_education_id."</td>";
                echo "<td>".$course."</td>";
                echo "<td>5</td>";
                echo "</tr>";
                
                $count += $DB->exec("
                    INSERT INTO `Groups` (`caption`, `id_institute`, `education_direction`, `specialty`, `id_education_form`, `id_education_course`) VALUES ('".$current_page->getCell("A".$row)."', 5, '".$current_page->getCell("B".$row)."', '".$current_page->getCell("C".$row)."', '".$form_education_id."', ".$course.")
                ");
                
                // print_r($DB->errorInfo());
            
            }
        }
        
    }
    echo "</tbody>";
    echo "</table>";
    
    echo "<h1>".$count."/".$i."</h1>";
    */
?>