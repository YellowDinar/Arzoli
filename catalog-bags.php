<?php include 'index.php' ?>
<?php startblock('otherstyles') ?>
    <link rel="stylesheet/less" type="text/css" href="css/catalog.less">
    <script type="text/javascript" src="js/script.js"></script>
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
        <div class="div_list">
            <?php
                $hostname = "db02.hostline.ru";
                $name = "vh61178_arzoli";
                $password = "arzoli";
                $dbName = "vh61178_db";

                mysql_connect($hostname,$name,$password);
                mysql_select_db($dbName) or die(mysql_error());
                $query_to_db = "SELECT name, img FROM Tovar WHERE model=3";
                $result = mysql_query($query_to_db) or die(mysql_error());
                $len = mysql_num_rows($result);
                for($i = 0;$i < $len;$i++) {
                    $row = mysql_fetch_array($result);
            ?>
                <div class="elem">
                    <a class="galleryBox" href="<?php echo $row['img'] ?>">
                        <img src="<?php echo $row['img'] ?>"> <br \>
                        <?php echo $row['name'] ?>
                    </a>
                </div>
            <?php } ?>
        </div>
      </div>
    </div>
<?php endblock() ?>