<?php
session_start();

	if(!isset($_SESSION['logged_user'])){
     	header("Location: ../index.php");
     	exit;
 	}
	include ('../config.php');
?>
<?php
	
	$result = mysql_query("SELECT * From  works");
	while($row = mysql_fetch_array($result)){
		$id_w = $row['id'];
	}
	if($id_w == 0){
	    $id_w = 99;    
	}
	$id_w++;
	$link="?work=".$id_w;
    $query = "INSERT INTO works (id, title, content, img, link)".
    "VALUES('{$id_w}', 'new', 'new', '', '{$link}');";
    mysql_query($query) or die("Ошибка вставки" . mysql_error()); 


    $result = mysql_query("SELECT * From  works_content");
	while($row = mysql_fetch_array($result)){
		$id = $row['id'];
	}
	$id++;

    $query = "INSERT INTO works_content (id, content, id_works)".
    "VALUES('{$id}', 'new', '{$id_w}');";

      
      mysql_query($query) or die("Ошибка вставки" . mysql_error()); 
      header("Location: home_admin.php?work=1"); 
    
?>