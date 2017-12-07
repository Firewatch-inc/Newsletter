<?php

    require_once "newsletter/libs/classes/phpexcel.php";

    $xsl = PHPExcel_IOFactory::load("test.xlsx");
    $current_page = $xsl->getActiveSheet();

    $row = 1;
    $column = 1;

    echo "<table border='1px'>";
    for ($row = 1; $row < 100; $row++) {

        echo "<tr>";
        echo "<td>".$current_page->getCell("B".$row)."</td>";
        echo "<td>".$current_page->getCell("D".$row)."</td>";
        echo "</tr>";

    }
    echo "</table>";



?>