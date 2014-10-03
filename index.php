<?php require_once 'ti/ti.php' ?>
<html>
  <head>
      <title>Arzoli</title>
      <?php startblock('meta') ?>
      <meta charset="utf-8">
      <meta name="viewport" content="width=1200px">  
      <link rel="stylesheet/less" type="text/css" href="css/style.less">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
      <script src="js/slider.js"></script>     
      <?php endblock() ?>
      <?php startblock('otherstyles') ?>
      <script type="text/javascript" src="js/index.js"></script>
      <?php endblock() ?>
      <?php startblock('opts') ?>
      <script type="text/javascript" src="js/less.js"></script>
      <link rel="stylesheet" href="css/animate.css">
      
      <?php endblock() ?>
    </head>
    <body>
    <?php startblock('header') ?>
      <div class="_backForm">
        <div class="_modalWindow">
          <div class="_close">
            <a href="javascript:">Закрыть</a>
          </div>
          <img src="images/onmain.png" alt="">
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
                <a href="index.php"><img src="images/logo.png"></a>
              </div>
              <div class="_mainMenu">
                <ul>
                  <li><a href="index.php">Главная</a></li>
                  <li><a href="about.php">О нас</a></li>
                  <li><a class="forClick" href="javascript:">Обувь</a>
                    <ul id="inner">
                      <li><a href="model.php">Модели</a></li>
                      <li><a href="clear.php">Уход за обувью</a></li>
                    </ul></li>
                  <li><a href="news.php">Новости</a></li>
                  <li><a href="question.php">Вопрос/ответ</a></li>
                  <li><a href="contacts.php">Контакты</a></li>
                </ul>
              </div>
            </div>
          </div>
            <?php endblock() ?>
            <?php startblock('main') ?>
                <div class="div_content">
                      <?php
                         if (strcasecmp($_GET["message"], "true") == 0) {
                             echo "<div class=\"animated bounceInLeft success\">
                                    Сообщение отправлено
                                   </div>";
                         }
                      ?>
                  <div class="siteWidth">
                    <div class="_foot">
                        <ul class="rslides">
                          <li><img src="images/main_page/1.jpg" alt=""></li>
                          <li><img src="images/main_page/2.jpg" alt=""></li>
                          <li><img src="images/main_page/3.jpg" alt=""></li>
                          <li><img src="images/main_page/4.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="_inputLogo">
                      <img src="images/onmain.png">
                    </div>
                  </div>
                </div>
            <?php endblock() ?>
            <?php startblock('footer') ?>
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
            <?php endblock() ?>
        </div>
    </body>
</html>