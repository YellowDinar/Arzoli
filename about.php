<!DOCTYPE html>
<html>
  <head>
    <title>Arzoli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200px">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <link rel="stylesheet/less" type="text/css" href="css/about.less">
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
          <div class="_images">
          <div>
            <img src="images/about_1.jpg">  
          </div>
          <div>
            <img src="images/about_2.jpg">
          </div>
          <div>
            <img src="images/about_3.jpg">
          </div>
        </div>
        <div class="_about">
          <h1>ОБУВЬ ARZOLI - УДАЧНЫЙ ВЫБОР!</h1>
          <p>В наш динамичный век, когда в течение одного дня приходится успевать так много, очень важен правильный выбор обуви. Какие требования у современного человека к ней? Какой должна быть обувь сегодня? Создатели Arzoli знают ответы на эти вопросы.</p>
	 <p>Arzoli — обувь, которая подарит вам красоту, легкость, комфорт, элегантность и подчеркнет индивидуальность вашего стиля.</p>
	<p>Сохраняя лучшие классические традиции, дизайнеры Arzoli учитывают все актуальные модные направления. Каждый сезон Arzoli представляет новую коллекцию обуви, которая продумана до мелочей истинными творцами обувной индустрии. Это утонченная, изящная и очень удобная обувь.</p>
	<p>Arzoli производит обувь на все случаи жизни: повседневная, для торжественных мероприятий, поездок и отпуска. Выбирая наши модели, можете быть уверены – вы не останетесь незамеченными.</p>
	<p>При создании женских моделей мы взяли за основу желание женщины всегда выглядеть привлекательной. Леди, деловая дама, заботливая мать, романтическая особа, пацанка - какой бы образ не выбрала женщина, мы предложим ей лучшее. Туфли, ботильоны, босоножки, балетки, мокасины – все для наших милых дам. В нашей обуви женщина всегда будет обворожительна и прекрасна.</p>
	<p>Мужчины выбирают Arzoli за удобство, элегантность и качество. Четкость линий, лаконичность в сочетании с изяществом подчеркнут образ успешного мужчины.</p>
	<p>Чтобы ваш образ выглядел завершенным, мы также предлагаем большой выбор аксессуаров.</p>
<p>Arzoli — это больше, чем обувь. Arzoli – это философия современного человека.</p>
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