<?php
	include ('../config.php');
	session_start();
	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}

if($_FILES["filename"]["size"] > 1024*100*1024)
   {
     echo ("Размер файла превышает 100 мегабайт");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/home/users/s/svetlana-chizhko/domains/brandinspire.ru/images/uploads/".$_FILES["filename"]["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }
    $k = $_POST['k'];
    
    if(($k > 200)&&($k < 250)){
        $result = mysql_query("SELECT * From clients ");
        $id = $k;
        $image = "<img src =\"/images/uploads/".$_FILES["filename"]["name"]."\">";
	    $query = "UPDATE clients SET icons = '$image' WHERE id_client = '$id' ;"; 
	    mysql_query($query) or die("Ошибка вставки" . mysql_error());
	    
    }
	elseif(($k > 400)&&($k < 450)){
	    $result = mysql_query("SELECT * From  slider");
	    $id = $k;
	     $image = "/images/uploads/".$_FILES["filename"]["name"];
	    $query = "UPDATE slider SET image = '$image' WHERE id_slide = '$id' ;"; 
	    mysql_query($query) or die("Ошибка вставки" . mysql_error());
	}
	elseif(($k > 800)&&($k < 1000)){
	    $result = mysql_query("SELECT * From  projects");
	    $ind = $_POST['ind'];
	    if($ind == 1){
	        $id = $k;
	    
	        $image = "<img src =\"/images/uploads/".$_FILES["filename"]["name"]."\">";
	        $query = "UPDATE projects SET main_image = '$image' WHERE id_project = '$id' ;"; 
	        mysql_query($query) or die("Ошибка вставки" . mysql_error());
	    }
	    else{
	        $id = $k;
	        $content = $_POST['content']."<img src =\"/images/uploads/".$_FILES["filename"]["name"]."\">";
	        $query = "UPDATE projects SET content = '$content' WHERE id_project = '$id' ;"; 
	        mysql_query($query) or die("Ошибка вставки" . mysql_error());
	    }
	}
	elseif($k == 1000){
	    $result = mysql_query("SELECT * From  info");
	    
	    
	    $id = $k+1;
	     $image = "<img src =\"/images/uploads/".$_FILES["filename"]["name"]."\">";
	     echo $image;
	    $query = "UPDATE info SET image_wt = '$image' WHERE id = '$id' ;"; 
	    mysql_query($query) or die("Ошибка вставки" . mysql_error());
	}
   header("Location: home_admin.php?page=".$k);

?>