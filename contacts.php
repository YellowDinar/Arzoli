<?php include 'index.php' ?>
<?php startblock('otherstyles') ?>
    <link rel="stylesheet/less" type="text/css" href="css/contacts.less">
    <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="http://yandex.st/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="http://api-maps.yandex.ru/1.1/index.xml?key=AOD7z1MBAAAAH7iOXQIANmi-5qINMVP7w4-dMvqGLpGM6bIAAAAAAAAAAADYlwDVa8-hy6aq0SZ2lWzverVQLA==" type="text/javascript"></script> 
    <script>
        $(function() {
            $('.list-group li').each(function() {
              if(!$(this).hasClass('city')) {
                $(this).click(function() {
                  var city = $(this).parent().find('li:first-child').text();
                  var test = $(this).attr('address');
                  $('.list-group li').each(function() {
                    $(this).removeClass('map_selected');
                  });
                  $(this).addClass('map_selected');
                  $('.navigation a').each(function() {
                   $(this).removeClass('selected');
                   if(city == $(this).text()) {
                    $(this).addClass('selected');
                   }
                  });
                  var s = new YMaps.Style();
                  s.iconStyle = new YMaps.IconStyle();
                  s.iconStyle.size = new YMaps.Point(71, 30);
                  var address= $(this).text().replace(/"/gi, '\\\"');
                  address = address.split(',');
                  address = address[0];
                  if(address.indexOf("Arzoli") > -1) {
                    s.iconStyle.href = "images/yandex.png";
                  }else if(address.indexOf("Rieker") > -1) {
                    s.iconStyle.href = "images/yandex2.png";
                  }else if(address.indexOf("Salamander") > -1) {
                    s.iconStyle.href = "images/yandex3.png";
                  }
                  var points = [];
                  var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);
                  map.addControl(new YMaps.Zoom());
                  $.ajax({
                    url: "http://geocode-maps.yandex.ru/1.x/?format=json&geocode="+city+", "+test,
                    context: document.body
                  }).done(function(data) {
                    points = data.response.GeoObjectCollection.featureMember['0'].GeoObject.Point.pos.split(' ');
                    map.setCenter(new YMaps.GeoPoint(points[0], points[1]), 16);
                    var placemark = new YMaps.Placemark(new YMaps.GeoPoint(points[0], points[1]),{style: s});
                    map.addOverlay(placemark);
                  });
                });
              }
            });

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

            $('.navigation a').each(function() {
              $(this).click(function() {
                $('.navigation a').each(function() {
                  $(this).removeClass('selected');
                });
                scrollToElement($(this));
                $(this).addClass('selected');
              });
            });

            function scrollToElement(elem) {
              var id = $(elem).attr('id');
              var one = $('.1').offset();
              var two = $('.2').offset();
              var three = $('.3').offset();
              var fouth = $('.4').offset();
              var five = $('.5').offset();
              var six = $('.6').offset();
              var seven = $('.7').offset();
              var eight = $('.8').offset();
              var nine = $('.9').offset();
              switch(id) {
                case '1':
                  $('html, body').animate({'scrollTop': one.top}, 'slow');
                break
                case '2':
                  $('html, body').animate({'scrollTop': two.top}, 'slow');
                break
                case '3':
                  $('html, body').animate({'scrollTop': three.top}, 'slow');
                break
                case '4':
                  $('html, body').animate({'scrollTop': fouth.top}, 'slow');
                break
                case '5':
                  $('html, body').animate({'scrollTop': five.top}, 'slow');
                break
                case '6':
                  $('html, body').animate({'scrollTop': six.top}, 'slow');
                break
                case '7':
                  $('html, body').animate({'scrollTop': seven.top}, 'slow');
                break
                case '8':
                  $('html, body').animate({'scrollTop': eight.top}, 'slow');
                break
                case '9':
                  $('html, body').animate({'scrollTop': nine.top}, 'slow');
                break
              }
            }
        });
      </script>
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
      <div class="navigation">
        <a href="javascript:" id="1"><li>Казань</li></a>
        <a href="javascript:" id="2"><li>Альметевск</li></a> 
        <a href="javascript:" id="3"><li>Набережные Челны</li></a>    
        <a href="javascript:" id="4"><li>Нижнекамск</li></a>  
        <a href="javascript:" id="5"><li>Ижевск</li></a>
        <a href="javascript:" id="6"><li>Ульяновск</li></a>
        <a href="javascript:" id="7"><li>Уфа</li></a>
        <a href="javascript:" id="8"><li>Чебоксары</li></a>
        <a href="javascript:" id="9"><li>Октябрьский</li></a>
      </div>
      <div id="YMapsID" style="width:450px;height:250px"></div>
        <div class="_where">
            <h1>Где купить обувь Arzoli:</h1>
            <div>Обувь и сумки бренда Arzoli можно купить в интернет-магазине <a href="http://salama.ru/">SALAMA.RU</a>, а также в фирменных магазинах.</div>
        </div>
        <h2>Наши магазины</h2>
        <div class="list-cont">
            <ul class="list-group">
            <div>   
            <li class="list-group-item list-group-item:first-child city 1">Казань</li>
            <li address="улица Фучика, дом 34" class="list-group-item">Магазин Arzoli, ул. Фучика, 34</li>
            <li address="улица Декабристов, дом 131" class="list-group-item">Магазин Arzoli, ул. Декабристов, 131</li>
            <li address="улица Чехова, дом 9" class="list-group-item">Магазин Salamander, ул. Чехова, 9</li>
            <li address="пр. Победы, дом 141" class="list-group-item">Магазин Salamander, пр. Победы ТЦ "МЕГА"</li>
            <li address="улица Ямашева, дом 46/33" class="list-group-item">Магазин Salamander, ул. Ямашева ТРК "Парк Хаус"</li>
            <li address="пр. Ибрагимова, дом 56" class="list-group-item">Магазин Salamander, пр. Ибрагимова ТРК "Тандем"</li>
            <li address="пр. Победы, дом 91" class="list-group-item">Магазин Rieker, пр. Победы ТРЦ "Южный"</li>
            <li address="улица Амирхана, дом 41" class="list-group-item">Магазин Rieker, пр. Амирхана, 41</li>
            <li address="улица Фучика, дом 34" class="list-group-item">Магазин Rieker, ул. Фучика, 34</li>
            <li address="улица Чехова, дом 9" class="list-group-item">Магазин Rieker, ул. Чехова, 9</li>
            <li address="улица Московская, дом 2" class="list-group-item">Магазин Rieker, ЦУМ 2 этаж.</li>
            <li address="улица Ямашева, дом 10" class="list-group-item">Магазин Rieker, пр. Ямашева, 10</li>
            <li address="улица Ямашева, дом 95" class="list-group-item">Магазин Rieker, ул. Ямашева, 95</li>
            </div>
            <div>     
            <li class="list-group-item city 2">Альметевск</li>
            <li address="улица Ленина, дом 100" class="list-group-item">Магазин Salamander, ул. Ленина, 100 ТК "Панорама"</li>
            <li address="улица Ленина, дом 41" class="list-group-item">Магазин Rieker, ул. Ленина, 41</li>
            </div>
            <div>
            <li class="list-group-item city 3">Набережные Челны</li>
            <li address="проспект Мира, дом 3" class="list-group-item">Магазин Salamander, пр. Мира, 3 ТЦ "Торговый Квартал"</li>
            <li address="" class="list-group-item">Магазин Arzoli, ул. Сююмбике, 2/19 ТЦ "Омега"</li>
            </div>
            <div>
            <li class="list-group-item city 4">Нижнекамск</li>
            <li address="проспект Химиков, дом 18" class="list-group-item">Магазин Salamander, ул. Химиков, 18 ТЦ "Сити Молл"</li>
            </div>
            <div>
            <li class="list-group-item city 5">Ижевск</li>
            <li address="улица Холмогорова, дом 11" class="list-group-item">Магазин Salamander, ул. Холмогорова, 11 ТРК "Талисман"</li>
            </div>
            <div>
            <li class="list-group-item city 6">Ульяновск</li>
            <li address="Московское шоссе, дом 91" class="list-group-item">Магазин Arzoli, Московское шоссе, 91 ТЦ "Пушкаревское Кольцо"</li>
            <li address="Московское шоссе, дом 108" class="list-group-item">Магазин Rieker, Московское шоссе, 108 ТЦ "Аквамолл"</li>
            <li address="Ульяновский проспект, дом 1" class="list-group-item">Магазин Rieker, Ульяновский пр-т, 1 ТРЦ "Самолет"</li>
            </div>
            <div>
            <li class="list-group-item city 7">Уфа</li>
            <li address="" class="list-group-item">Магазин Arzoli, ул. Энтузиастов, ТРЦ "Планета"</li>
            <li address="пр. Октября, дом 4/1" class="list-group-item">Магазин Salamander, пр. Октября, 4/1 ТЦ "МИР"</li>
            <li address="улица Комсомольская, 112" class="list-group-item">Магазин Salamander, ул. Комсомольская/50-летия СССР, ТРЦ "Июнь"</li>
            <li address="улица Рубежная, дом 174" class="list-group-item">Магазин Salamander, ул. Рубежная, 174 ТЦ "Мега"</li>
            </div>
            <div>
            <li class="list-group-item city 8">Чебоксары</li>
            <li address="улица Калинина, дом 105а" class="list-group-item">Магазин Salamander, ул. Калинина, 105а ТРЦ "МегаМолл"</li>
            <li address="пр. И.Яковлева, дом 4б" class="list-group-item">Магазин Arzoli, пр. И.Яковлева, 4б МТВ Центр</li>
            <li address="Президентский бульвар, дом 20" class="list-group-item">Магазин Rieker, Президентский бульвар, 20 ТРЦ "Каскад"</li>
            </div>
            <div>
            <li class="list-group-item city 9">Октябрьский</li>
            <li address="проспект Ленина, 59/1" class="list-group-item list-group-item:last-child">Магазин Rieker, пр. Ленина, 59/1 ТЦ "ВЕРБА"</li>
            </div>
            </ul>
        <div class="_phone">
            <h1>Контакты:</h1>
            <div>тел. 8-800-200-97-97 (Звонок бесплатный)</div>
            <div>email: info@arzoli.ru</div>
        </div>
    </div>
  </div>
<?php endblock() ?>