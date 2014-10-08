<?php include 'index.php' ?>
<?php startblock('otherstyles') ?>
    <link rel="stylesheet/less" type="text/css" href="css/about.less">
    <script type="text/javascript" src="js/script.js"></script>
    <style>
    .img_in_news {
        width:135px;
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
        <div class="_news">
          <div class="_listOfNews">
              <?php
                    $hostname = "db02.hostline.ru";
                    $name = "vh61178_arzoli";
                    $password = "arzoli";
                    $dbName = "vh61178_db";

                    mysql_connect($hostname,$name,$password);
                    mysql_select_db($dbName) or die(mysql_error());
                    $result = mysql_query("SELECT * FROM News ORDER BY datetime DESC") or die(mysql_error());
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
<?php endblock() ?>