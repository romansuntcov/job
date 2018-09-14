<?php
	session_start();
	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}
	include ('../config.php');
?>

<?php
	$k = $_POST['k'];
	$result = mysql_query("SELECT * From  slider");
	while($row = mysql_fetch_array($result)){
		$count = $row['id_slide'];
	}
	if($count == 0){
	    $count = 401;  
	}
	
	$count++;
	$id = $count;
	$num = $count - 400;
    $query = "INSERT INTO slider (id_slide, title, image, number)".
    "VALUES('{$id}', 'new', 'new', '{$num}');";
    mysql_query($query) or die("Ошибка вставки" . mysql_error()); 
    header("Location: home_admin.php?page=400");     
?>