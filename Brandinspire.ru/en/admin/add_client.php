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
	$result = mysql_query("SELECT * From  clients");
	while($row = mysql_fetch_array($result)){
		$count = $row['id_client'];
		print($count);
	}
	if($count == 0){
	    $count = 201;  
	    print($count);  
	}
	$count++;
	$id = $count;
	print($id);
    $query = "INSERT INTO clients (id_client, title, link, icons)".
    "VALUES('{$id}', 'new', 'new', 'new');";
    mysql_query($query) or die("Ошибка вставки" . mysql_error()); 
      header("Location: home_admin.php?page=4"); 
?>