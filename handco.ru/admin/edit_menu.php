<?php
	include ('../config.php');
	session_start();
 	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}
?>
<?php
	
	$result = mysql_query("SELECT * From  menu");

	$elem_name = $_POST['elem_name'];
	$id = (int)$_POST['id_1'];
	$query = "UPDATE menu SET title = '$elem_name' WHERE id = '$id' ;"; 
	mysql_query($query) or die("Ошибка вставки" . mysql_error());

	$result = mysql_query("SELECT * From  main");
	$content = $_POST['text'];
	$title = $_POST['title'];
	$id  = (int)$_POST['id_2'];

    $query = "UPDATE main SET content = '$content', title = '$title' WHERE id = '$id' ;"; 

      
      mysql_query($query) or die("Ошибка вставки" . mysql_error()); 
      header("Location: home_admin.php?work=".$k);
?>
