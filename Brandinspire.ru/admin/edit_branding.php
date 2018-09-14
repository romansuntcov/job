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
 	if(($k > 1200)&&($k <1300))
			$y="branding";
	elseif(($k > 1300)&&($k <1400))
			$y="design";
	elseif(($k > 1400)&&($k <1500))
			$y="content";
	elseif(($k > 1500)&&($k <1600))
			$y="promotion";
			
	$result = mysql_query("SELECT * From  $y");
	$title = $_POST['elem_name'];
	$text = $_POST['text']; 
	$id = $_POST['id_2'];
	$query = "UPDATE $y SET  title = '$title', points = '$text' where id_point = '$id' ;"; 
	echo $title, $text, $id;
	mysql_query($query) or die("Ошибка вставки.<br> проверьте текст на специальные знаки и замените их на подходящие во вкладке - insert - special characters ");  
    header("Location: home_admin.php?page=".$k);
?>
