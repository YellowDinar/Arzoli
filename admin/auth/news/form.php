<?php

    session_start();

    if (isset($_SESSION['admin']) && strcasecmp($_SESSION['admin'], "true") == 0){
    
?>
    <!DOCTYPE html>
    <html>
      <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <style>
            body {
                text-align: center;
            }
        </style>
      </head>
      <body>
        <h1>Добавить новоть</h1>
          <form action="add.php" method="post">
              <p><input type="text" name="title" placeholder="Заголовок *" required /></p>
              <p><textarea name="text" required></textarea></p>
              <p><input type="file" name="img"></p>
              <p><input type="submit" value="Сохранить" /></p>
          </form>
          <form action="logout.php" method="get">
            <input type="submit" value="Выйти" />
          </form>
      </body>
    </html>
<?php
    
    } else {
        header ('Location: ../admin.html');
    }
        
?>
    
    