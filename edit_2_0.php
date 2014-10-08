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
    echo $len;

?>