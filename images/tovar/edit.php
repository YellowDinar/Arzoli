<?php
    $hostname = "db02.hostline.ru";
    $name = "vh61178_arzoli";
    $password = "arzoli";
    $dbName = "vh61178_db";

    mysql_connect($hostname,$name,$password);
    mysql_select_db($dbName) or die(mysql_error());
    $query_to_db = "SELECT * FROM Tovar WHERE model=3";
    $result = mysql_query($query_to_db) or die(mysql_error());
    $len = mysql_num_rows($result);
    for($i = 0;$i < $len;$i++) {
        $row = mysql_fetch_array($result);
//        echo $row["name"];
        $del_from_db = "DELETE FROM Tovar WHERE name=\"".$row["name"]."\"";
        $del_result = mysql_query($del_from_db) or die(mysql_error());
        $path = "images/tovar/".$row["name"].".jpg";
//        echo $path;
        $exist = file_exists($path);
        if ($exist) {
            $row["img"] = "images/tovar/".$row["name"].".jpg";
            echo "JPG<br>";
        } else {
            $path2 = "images/tovar/".$row["name"].".jpeg";
            $exist2 = file_exists($path2);
            if ($exist2) {
                echo "JPEG<br>";
                $row["img"] = "images/tovar/".$row["name"].".jpeg";
            }
        }
        $insert_to_db = "INSERT INTO Tovar (name,img,model) VALUES (\"".$row["name"]."\",\"".$row["img"]."\",".$row["model"].")";
        $insert_result = mysql_query($insert_to_db) or die(mysql_error());
        
        
        
        
        
    }

//        $dir = opendir ("./images/tovar/");
//        while ($file = readdir ($dir)) {
//            echo $file;
//        }
//        closedir ($dir);
        
?>