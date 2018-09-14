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
	$result = mysql_query("SELECT * From  projects");
	while($row = mysql_fetch_array($result)){
		$count = $row['id_project'];
	}
	if($count == 0){
	    $count = 801;  
	}
	
	$count++;
	$id = $count;
	$num = $count - 800;
	$num = "?project=".$num;
    $query = "INSERT INTO projects (id_project, link, title, main_img, content)".
    "VALUES('{$id}', '{$num}', 'new', 'new', 'new');";
    mysql_query($query) or die("Ошибка вставки" . mysql_error()); 
    header("Location: home_admin.php?page=3");     
?>