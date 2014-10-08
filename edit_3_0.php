<?php
    $hostname = "db02.hostline.ru";
    $name = "vh61178_arzoli";
    $password = "arzoli";
    $dbName = "vh61178_db";

    mysql_connect($hostname,$name,$password);
    mysql_select_db($dbName) or die(mysql_error());
    $query_to_db = "SELECT * FROM Tovar WHERE category=3";
    $result = mysql_query($query_to_db) or die(mysql_error());
    $len = mysql_num_rows($result);
    $arr = array();
    for($i = 0;$i < $len;$i++) {
        $row = mysql_fetch_array($result);
        if (in_array($row["name"], $arr)) {
            $del_from_db = "DELETE FROM Tovar WHERE id=\"".$row["id"]."\"";
            $del_result = mysql_query($del_from_db) or die(mysql_error());
        } else {
            array_push($arr, $row["name"]);
        }
        
        
        
        
        
        
//        $path = "images/tovar/".$row["name"].".jpg";
//
//        $exist = file_exists($path);
//        if ($exist) {
//            $row["img"] = "images/tovar/".$row["name"].".jpg";
//        } else {
//            $path2 = "images/tovar/".$row["name"].".jpeg";
//            $exist2 = file_exists($path2);
//            if ($exist2) {
//                $row["img"] = "images/tovar/".$row["name"].".jpeg";
//            }
//        }
//        $insert_to_db = "INSERT INTO Tovar (name,img,category) VALUES (\"".$row["name"]."\",\"".$row["img"]."\",".$row["category"].")";
//        $insert_result = mysql_query($insert_to_db) or die(mysql_error());
           
    }
        
?>