<meta charset="UTF-8">

<?php
	include ('../config.php');
	session_start();
 	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}
?>

<?php
	$k = $_POST['k'];
	$result = mysql_query("SELECT * From  menu");
	$elem_name = $_POST['elem_name'];
	$id = (int)$_POST['id_1'];
	$query = "UPDATE menu SET title = '$elem_name' WHERE id_menu = '$id' ;"; 
	mysql_query($query) or die("Ошибка вставки" . mysql_error());
	$result = mysql_query("SELECT * From  main");
	$content = $_POST['text'];
	$title = $_POST['title'];
	$id  = (int)$_POST['id_2'];
    $query = "UPDATE main SET content = '$content', title = '$title' WHERE id_main = '$id' ;"; 
	mysql_query($query) or die("Ошибка вставки.<br> проверьте текст на специальные знаки и замените их на подходящие во вкладке - insert - special characters "); 
    header("Location: home_admin.php?page=".$k);
?>
