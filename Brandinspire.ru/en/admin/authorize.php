<?php
    include ('../config.php');
?> 

<?php
    session_start();
    $result = mysql_query("SELECT * FROM info");
    $row = mysql_fetch_array($result);               
                  
    if(($_POST['user_name']==$row['login'])&&($_POST['user_pass']==$row['password'])){
        $_SESSION['logged_user'] = $_POST['user_name'];
        header("Location: home_admin.php");
        exit;
    }
?>

<html>
    <body>
        Вы ввели неверный пароль! Вернуться к <a href="../admin.php">админке</a>
    </body>
</html>