<?php include 'index.php' ?>
<?php startblock('otherstyles') ?>
    <link rel="stylesheet/less" type="text/css" href="css/question.less">
    <script type="text/javascript" src="http://vk.com/js/api/openapi.js?113"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
        VK.init({apiId: 4424623, onlyWidgets: true});
    </script>
    <style>
        #question {
            text-align: center;
        }  
    </style>
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
      <h1>ВОПРОС-ОТВЕТ</h1> 
      <div class="alert alert-danger">Купил ваши ботинки,через месяц развалились,а ваш магазин в Ульяновске уже закрыт!Что мне делать? Вячеслав, Ульяновске .</div>
      <div class="alert alert-success">По вопросам качества вы можете обратится в наш магазин Rieker, расположенный в ТЦ "Аквамолл", 2 этаж,  по адресу Московское шоссе, 108. тел. магазина 8(8422)73-58-75.</div><br><br><br>
        <div class="alert alert-danger">Скажите, где можно купить обувь Arzoli? Анна, Иваново.</div>
      <div class="alert alert-success">Обувь Arzoli можно приобрести в интернет-магазине SALAMA.RU, где представлены все коллекции обуви данного бренда.</div><br><br><br>
      <div class="alert alert-danger">В каком именно магазине в г.Казани наибольший выбор марки Арзоли? Дамир, Казань. </div>
      <div class="alert alert-success">Наибольший выбор обуви Arzoli в магазинах, расположенных по адресам ул. Фучика, 34 и ул. Декабристов, 131</div><br><br><br>
        <div class="alert alert-danger">Как можно узнать о скидках? Алина, Альметевск.</div>
      <div class="alert alert-success">Информацию о скидках можете узнать на сайте <a href="http://salama.ru">salama.ru</a>.</div>
    </div>
  </div>
<?php endblock() ?>