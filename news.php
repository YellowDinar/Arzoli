<!DOCTYPE html>
<html>
  <head>
    <title>Arzoli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200px">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <link rel="stylesheet/less" type="text/css" href="css/news.less">
    <script type="text/javascript" src="js/less.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
    
    <script>
        $(function() {
            var height = $(window).height();
            var head = $('.div_header').height();
            var foot = $('.div_footer').height();
            var contentHeight = height-(head+foot);
            var paddingContent = (50/contentHeight)*100;

            $('.div_content').css('min-height', contentHeight);
              
            $('._message .btn_sim').click(function() {
                $('._backForm').show();
           });
           $('._close a').click(function(){
            $('._backForm').hide();
           });
        });
      </script>
      
  </head>
  <body>
      <div class="_backForm">
  <div class="_modalWindow">
    <div class="_close">
      <a href="javascript:">Закрыть</a>
    </div>
    <img src="/q/images/onmain.png" alt="">
    <form action="modal_form.php" method="post">
      <input type="hidden" name="page" id="page">
      <script>
          document.getElementById('page').value = window.location.href;
      </script>
      <div>
      Имя: <br>
      <input name="name" type="text">
      </div>
      <div>
      Телефон или e-mail: <br>
      <input name="tel" type="text">
      </div>
      <div>
      Ваше Сообщение: <br>
      <textarea name="question"></textarea>
      </div>
      <div>
      <input class="btn_sim" type="submit" value="Отправить">
      </div>
    </form>
  </div>
</div>
    <div class="div_header">
      <div class="siteWidth">
        <div class="_logo">
          <a href="index.html"><img src="images/logo.png"></a>
        </div>
        <div class="_mainMenu">
          <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="model.php">Модели</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="question.php">Вопрос/ответ</a></li>
            <li><a href="contacts.php">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="div_content">
      <div class="siteWidth">
        <div class="_news">
          <div class="_listOfNews">
              <?php
                    $hostname = "db02.hostline.ru";
                    $name = "vh61178_arzoli";
                    $password = "arzoli";
                    $dbName = "vh61178_db";

                    mysql_connect($hostname,$name,$password);
                    mysql_select_db($dbName) or die(mysql_error());
                    $result = mysql_query("SELECT * FROM News") or die(mysql_error());
                    $len = mysql_num_rows($result);
                    for($i = 0;$i < $len;$i++) {
                        $row = mysql_fetch_array($result);
                ?>
                        <div class="_elem">
                            <div class="_title">
                                <h1><?php echo $row['title'] ?></h1>
                            </div>
                            <div class="_date"><?php echo $row['datetime'] ?></div>
                            <div class="_inform">
                                <?php
                                    if ($row['img']!="") {
                                ?>
                                    <div class="_img">
                                        <img src="<?php echo $row['img'] ?>" />
                                    </div>
                                <?php } ?>
                                <div class="_text">
                                    <p><?php echo $row['text'] ?></p>
                                </div>
                            </div>
                        </div>
              <?php } ?>
          </div>
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
          <a href="javascript:" class="btn_sim">Оставьте сообщение</a>
        </div>
      </div>
    </div>
  </body>
</html>