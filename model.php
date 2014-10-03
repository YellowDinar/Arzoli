<?php include 'index.php' ?>
<?php startblock('otherstyles') ?>
    <link rel="stylesheet/less" type="text/css" href="css/model.less">
    <script type="text/javascript" src="js/script.js"></script>
<?php endblock() ?>
<?php startblock('main') ?>
<!DOCTYPE html>
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
<?php endblock() ?>