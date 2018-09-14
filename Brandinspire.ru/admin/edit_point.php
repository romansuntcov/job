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
	$result = mysql_query("SELECT * From  branding");
	$title = $_POST['elem_name'];
	$text = $_POST['text']; 
	$id = $_POST['id_1'];
	$query = "UPDATE branding SET  title = '$title', points = '$text' where id_point = '$id' ;"; 
	mysql_query($query) or die("Ошибка вставки.<br> проверьте текст на специальные знаки и замените их на подходящие во вкладке - insert - special characters ");  
    header("Location: home_admin.php?page=".$k);
?>
