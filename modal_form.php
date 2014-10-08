<?php
    $page = $_POST["page"];
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $question = $_POST["question"];
    $from = "arzoli.ru";
    $email = "dinaritis@yandex.ru";
    $topic = "Сообщение от пльзователя";
    $message = "<p>Имя: ".$name."</p>";
    $message .= "<p>Телефон или Email: ".$tel."</p>";
    $message .= "<p>Сообщение: ".$question."</p>";
    $headers = "From: ".$from."\r\nReply-To: ".$from."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8;";
    $body .= $message."\r\n\r\n";
    mail($email, $topic, $body, $headers);
    echo $page;
    header("Location:".$page."?message=true");
?>
