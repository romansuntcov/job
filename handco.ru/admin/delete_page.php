<?php
 	session_start();

	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}
	include ('../config.php');

?>
<?php

	$id_1 = $_POST['id_1'];
	
	$id_2 = $_POST['id_2'];

    $query = "DELETE FROM works WHERE id = $id_1 ;";
    mysql_query($query) or die("Ошибка удаления" . mysql_error()); 
    $query = "DELETE FROM works_content WHERE id = $id_2 ;";
      
      mysql_query($query) or die("Ошибка удаления" . mysql_error());
      header("Location: home_admin.php?work=1");  
?>
