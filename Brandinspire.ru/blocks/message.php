<?php
    if($_POST){
        $to = 'hello@brandinspire.ru'; 
        $from = 'hello@brandinspire.ru';
        $subject = "Письмо с сайта brandinspire.ru"; //тема
        $message = "message: ".($_POST["hello"]);
        $headers = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: <hello@brandinspire.ru>\r\n";
        $result = mail($to, $subject, $message, $headers);
        if ($result){
            echo "<div class=\"access\">Ваше сообщение отправлено</div>";
        }
    }
?>
