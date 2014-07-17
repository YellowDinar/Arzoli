<!DOCTYPE html>
<html>
  <head>
    <title>Arzoli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200px">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <link rel="stylesheet/less" type="text/css" href="css/model.less">
    <link rel="stylesheet" href="css/animate.css">
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
           $('.success').css('top', ($(window).height()-120));

            setTimeout(function() {
              $('.success').removeClass('bounceInLeft');
              $('.success').addClass('bounceOutLeft');
            }, 3000);
        });
      </script>
      
  </head>
  <body>
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
            <li><a href="model.php">Модели</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="question.php">Вопрос/ответ</a></li>
            <li><a href="contacts.php">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="div_content">
          <?php
             if (strcasecmp($_GET["message"], "true") == 0) {
                 echo "<div class=\"animated bounceInLeft success\">
                        Сообщение отправлено
                       </div>";
             }
          ?>
      <div class="siteWidth">
          <div class="div_models">
            <h1>МОДЕЛИ: КОЛЛЕКЦИЯ ВЕСНА-ЛЕТО</h1>
            <div class="_pic">
              <div>
                  <a href="category.php?model=female">
                      <img src="images/model_1.jpg"><br \>
                      Женская обувь
                  </a>
              </div>
              <div>
                  <a href="category.php?model=male">
                      <img src="images/model_2.jpg"><br \>
                      Мужская обувь
                  </a>
              </div>
              <div>
                  <a href="category.php?model=bag">
                      <img src="images/model_3.jpg"><br \>
                      Сумки Arzoli
                  </a>
              </div>
            </div>
          </div>
          <div class="_about">
            <p>Коллекция обуви Arzoli из года в год представлена изобилием стильных моделей, широким выбором модельного ряда, богатым сочетанием цветов и материалов, различными формами линий колодки, это всегда профессионально продуманный ассортимент.</p> 
<p>Женская обувь, которой свойственна лёгкость и утончённость, всегда разнообразна: бархатные и на тонкой шнуровке, с широким голенищем и стильной сборкой, на массивном каблуке, танкетке или на изящной шпильке. Обувь на плоской подошве, также как и на устойчивом каблуке, всегда в моде. Это то, что должно быть в гардеробе каждой женщины.</p>
<p>Мужская обувь — качественная и стильная, соответствует всем требованиям успешного современного мужчины. Классические и авангардные, сдержанные и яркие. Модели марки Arzoli сочетают в себе высокое качество, практичность, великолепный дизайн, комфорт, удобство колодок и соответствие цены и качества. </p>
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