<!DOCTYPE html>
<html>
  <head>
    <title>Arzoli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200px">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <link rel="stylesheet/less" type="text/css" href="css/catalog.less">
    <script type="text/javascript" src="js/less.js"></script>
  </head>
  <body>
    <div class="div_header">
      <div class="siteWidth">
        <div class="_logo">
          <a href="index.html"><img src="images/logo.png"></a>
        </div>
        <div class="_mainMenu">
          <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="model.html">Модели</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="question.html">Вопрос/ответ</a></li>
            <li><a href="contacts.html">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="div_content">
      <div class="siteWidth">
        <div class="div_list">
            <?php
                $hostname = "db02.hostline.ru";
                $name = "vh61178_arzoli";
                $password = "arzoli";
                $dbName = "vh61178_db";

                mysql_connect($hostname,$name,$password);
                mysql_select_db($dbName) or die(mysql_error());
                $category = $_GET["category"];
                $query_to_db = "SELECT name, img FROM Tovar WHERE category=".$category;
                $result = mysql_query($query_to_db) or die(mysql_error());
                $len = mysql_num_rows($result);
                for($i = 0;$i < $len;$i++) {
                    $row = mysql_fetch_array($result);
            ?>
                <div class="elem">
                    <a>
                        <img src="<?php echo $row['img'] ?>"> <br \>
                        <?php echo $row['name'] ?>
                    </a>
                </div>
            <?php } ?>
        </div>
      </div>
    </div>
    <div class="div_footer">
      <div class="siteWidth">
        <div class="_contacts">
          <div>Контакты</div>
          <div>тел. 8-800-200-97-97 (Звонок бесплатный)</div>
          <div>email: info@arzoli.ru</div>
        </div>
        <div class="_message">
          <a href="#" class="btn_sim">Оставьте сообщение</a>
        </div>
      </div>
    </div>
  </body>
</html>