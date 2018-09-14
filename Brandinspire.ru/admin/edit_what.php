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
	$result = mysql_query("SELECT * From  what_we_do");
	$title = $_POST['elem_name'];
	$text = $_POST['text']; 
	$f_title = $_POST['full_title'];
	$f_content = $_POST['full_content'];
	$query = "UPDATE what_we_do SET  title = '$title', text = '$text', full_title = '$f_title', full_content = '$f_content' where id_what = '$k';"; 
	mysql_query($query) or die("Ошибка вставки.<br> проверьте текст на специальные знаки и замените их на подходящие во вкладке - insert - special characters ");  
    header("Location: home_admin.php?page=".$k);
?>
