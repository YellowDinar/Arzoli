<?php
/**
 * Created by PhpStorm.
 * User: Dinar
 * Date: 05.07.14
 * Time: 0:08
 */

$hostname = "db02.hostline.ru";
$name = "vh61178_arzoli";
$password = "arzoli";
$dbName = "vh61178_db";

mysql_connect($hostname,$name,$password);
mysql_select_db($dbName) or die(mysql_error());
mysql_query("INSERT INTO News (col1,col2) VALUES(15,col1*2)") or die(mysql_error());
?>