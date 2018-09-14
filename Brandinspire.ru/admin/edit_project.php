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
	$result = mysql_query("SELECT * From  projects");
	$title = $_POST['elem_name'];
	$main_img = $_POST['image']; 
	$cont = $_POST['content'];
	$query = "UPDATE projects SET  title = '$title', main_img = '$main_img', content = '$cont' where id_project = '$k';"; 
	mysql_query($query) or die("Ошибка вставки.<br> проверьте текст на специальные знаки и замените их на подходящие во вкладке - insert - special characters ");  
    header("Location: home_admin.php?page=".$k);
?>
