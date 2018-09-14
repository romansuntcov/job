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
	$result = mysql_query("SELECT * From  works");

	$title = $_POST['title'];
	$content = $_POST['text']; 
	$id = (int)$_POST['id_1'];
	$query = "UPDATE works SET  title = '$title', content = '$content' WHERE id = '$id' ;"; 
	mysql_query($query) or die("Ошибка вставки" . mysql_error());

	$result = mysql_query("SELECT * From  works_content");
	$content = $_POST['content'];
	$id  = (int)$_POST['id_2'];

    $query = "UPDATE works_content SET content = '$content' WHERE id = '$id' ;"; 
    echo $k;

      
      mysql_query($query) or die("Ошибка вставки" . mysql_error());  
      header("Location: home_admin.php?work=".$k);
?>
