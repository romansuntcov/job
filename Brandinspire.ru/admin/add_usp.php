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
	$result = mysql_query("SELECT * From  usp");
	while($row = mysql_fetch_array($result)){
		$count = $row['id_usp'];
	}
	if($count == 0){
	    $count = 11;  
	}
	
	$count++;
	$id = $count;
    $query = "INSERT INTO usp (id_usp, title, text)".
    "VALUES('{$id}', 'new', 'new');";
    mysql_query($query) or die("Ошибка вставки" . mysql_error()); 
    header("Location: home_admin.php?page=10");    
?>