<?php
    $title = $_POST["title"];
    $text = $_POST["text"];

    $hostname = "db02.hostline.ru";
    $name = "vh61178_arzoli";
    $db_password = "arzoli";
    $dbName = "vh61178_db";

    $connect = mysql_connect($hostname, $name, $db_password);
    mysql_select_db($dbName) or die(mysql_error());
    $result = mysql_query("INSERT INTO `vh61178_db`.`News` (`id`, `title`, `text`, `img`, `datetime`) VALUES (NULL, ".$title.", ".$text", '', CURRENT_TIMESTAMP)") or die(mysql_error());
?>