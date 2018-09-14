<?php
	include ('../config.php');
	session_start();
	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}

if($_FILES["filename"]["size"] > 1024*100*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/home/users/i/igorrnaumovv/domains/handco.ru/images/uploads/".$_FILES["filename"]["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }
    $k = $_POST['k'];
    
    if(empty($_POST['id_2'])){
        $result = mysql_query("SELECT * From  works");
        $id = (int)$_POST['id_1'];
        $image = "../images/uploads/".$_FILES["filename"]["name"];
        echo "1";
        echo $image;
	    $query = "UPDATE works SET img = '$image' WHERE id = '$id' ;"; 
	    mysql_query($query) or die("Ошибка вставки" . mysql_error());
	    
    }
	else{
	    $result = mysql_query("SELECT * From  works_content");
	    
	    
	    $id = (int)$_POST['id_2'];
	    $content = $_POST['content'];
	    
	    $image = $content."<img src=\"../images/uploads/".$_FILES["filename"]["name"]."\">";
	    $query = "UPDATE works_content SET content = '$image' WHERE id = '$id' ;"; 
	    mysql_query($query) or die("Ошибка вставки" . mysql_error());
	}
   header("Location: home_admin.php?work=".$k);

?>