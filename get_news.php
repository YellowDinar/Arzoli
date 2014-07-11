<?php
$hostname = "db02.hostline.ru";
$name = "vh61178_arzoli";
$password = "arzoli";
$dbName = "vh61178_db";

mysql_connect($hostname,$name,$password);
mysql_select_db($dbName) or die(mysql_error());
$result = mysql_query("SELECT * FROM News") or die(mysql_error());
$len = mysql_num_rows($result);
$json = "{\"response\":[";
for($i = 0;$i < $len;$i++) {
    $row = mysql_fetch_array($result);
    $json = $json."{\"title\":\"".$row['title']."\",\"text\":\"".$row['text']."\",\"datetime\":\"".$row['datetime']."\",\"img\":\"".$row['img']."\"}";
    if($i+1 != $len) {
        $json = $json.",";
    }
}
$json = $json."]}";
echo $json;
?>