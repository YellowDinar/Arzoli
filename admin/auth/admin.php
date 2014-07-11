<?php
$username = $_POST["username"];
$password = $_POST["password"];

$hostname = "db02.hostline.ru";
$name = "vh61178_arzoli";
$db_password = "arzoli";
$dbName = "vh61178_db";

$connect = mysql_connect($hostname,$name,$db_password);
mysql_select_db($dbName) or die(mysql_error());
$result = mysql_query("SELECT * FROM Users") or die(mysql_error());

while ($row = mysql_fetch_assoc($result)) {
    $username_correct = $row["username"];
    $password_correct = $row["password"];
}

if (strcasecmp($username, $username_correct) == 0) {
    if (strcasecmp($password, $password_correct) == 0) {
        session_start();
        $_SESSION['admin'] = "true";
        header ('Location: news/form.php');
    } else {
        echo "<h2 align=\"center\">Неправильный пароль!</h2>";
        echo "<h4 align=\"center\"><a href=\"admin.html\">Вернуться и попробовать еще раз</a></h4>";
    }
} else {
    echo "<h2 align=\"center\">Неправильный логин!</h2>";
    echo "<h4 align=\"center\"><a href=\"admin.html\">Вернуться и попробовать еще раз</a></h4>";
}

//echo $username_correct;
//echo $password_correct;

?>