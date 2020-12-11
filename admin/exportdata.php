<?php
session_start();
 

    $filepath = realpath(dirname(__FILE__));
        include_once($filepath . '/../classes/cart.php');
        include_once($filepath . '/../helpers/format.php');
    if ($_GET['submit'] == "xuat") {
        $link = mysqli_connect("localhost", "root", "") or die("Cannot connect to the localhost");
        mysqli_select_db($link, "awesome") or die("Cannot connect to the database");
        mysqli_query($link,"SET NAMES 'UTF8'");
        $output = '';
        $query = "SELECT * FROM tbl_order ";

        $resultSet = mysqli_query($link, $query) or die("database error:". mysqli_error($link));
        $developersData = array();
        while ($developer = mysqli_fetch_assoc($resultSet)) {
            $developersData[] = $developer;
        }

        $fileName = "xuatdonhang_" . date('Ymd') . ".xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        $showColoumn = false;
        if (!empty($developersData)) {
            foreach ($developersData as $developerInfo) {

                echo implode("\t", array_values($developerInfo)) . "\n";
            }

            exit;
        }
    }

?>