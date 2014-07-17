<!DOCTYPE html>
<html>
  <head>
    <title>Arzoli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200px">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <link rel="stylesheet/less" type="text/css" href="css/contacts.less">
    <script type="text/javascript" src="js/less.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
    <!-- ФУЧИКА -->
<!--    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=djcPL020RL0WQ-Td1yGBchCBJJ_oaDOx&width=450&height=400&id=f"></script>-->
    <!-- ФУЧИКА -->
      
    <!-- ДЕКАБРИСТОВ -->
<!--    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=CjJR7DBeYiaQT--5_jkZ1XWrv4XUBGko&width=450&height=400&id=d"></script>-->
<!--     ДЕКАБРИСТОВ -->
      
    <!-- ОМЕГА -->
<!--    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=NESmH6Pa_QnJPsLCmuJ0CdOUp89lJ3a0&width=450&height=400&id=o"></script>-->
    <!-- ОМЕГА -->
      
    <!-- ПЛАНЕТА -->
<!--      <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=UQr2FdrfvwAdUquZU2ukaExSVCT0-ipm&width=450&height=400&id=p"></script>-->
    <!-- ПЛАНЕТА -->
      
<!--
    <script>
        localStorage["arzoli_map_id"] = "";
        function changeMap (id) {
            if (localStorage["arzoli_map_id"]){
                document.getElementById(localStorage["arzoli_map_id"]).style.display = "none";
            }
            setTimeout(document.getElementById(id).style.display = "block", 1500);
            localStorage["arzoli_map_id"] = id;
        }
    </script>
-->
      
<!--
    <style>
        .maps {
            display: none;
        }  
    </style>
-->
      
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
          <div class="_phone">
              <h1>Контакты:</h1>
              <div>тел. 8-800-200-97-97 (Звонок бесплатный)</div>
              <div>email: info@arzoli.ru</div>
          </div>
          <div class="_where">
              <h1>ГДЕ КУПИТЬ ОБУВЬ ARZOLI:</h1>
              <div>Обувь и сумки бренда Arzoli можно купить в интернет-магазине <a href="http://salama.ru/">SALAMA.RU</a>, а также в фирменных магазинах.</div>
          </div>
          <h2>Магазины Arzoli</h2>
          <div class="list-cont">
              <ul class="list-group">
              <li class="list-group-item list-group-item:first-child">улица Фучика, 34, Казань</li>
              <li class="list-group-item">улица Декабристов, 131, Казань</li>
              <li class="list-group-item">ТЦ "Омега" проспект Сююмбике, 2/19, Набережные Челны</li>
              <li class="list-group-item list-group-item:last-child">ТРЦ "Планета улица Энтузиастов, 20, Уфа</li>
              </ul>
          </div>
          <h2>Наши магазины</h2>
          
<!--
        <button onclick="changeMap('f')">Фучика</button>
        <button onclick="changeMap('d')">улица Декабристов, 131, Казань</button>
        <button onclick="changeMap('o')">ТЦ "Омега" проспект Сююмбике, 2/19, Набережные Челны</button>
        <button onclick="changeMap('p')">ТРЦ "Планета улица Энтузиастов, 20, Уфа"</button>
-->
<!--
        <script>
            changeMap('f');  
        </script>
-->
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