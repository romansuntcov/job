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
  if(($k >200)&&($k < 250)){
    $query = "DELETE FROM clients WHERE id_client = $k;";
    mysql_query($query) or die("Ошибка удаления" . mysql_error()); 
    header("Location: home_admin.php?page=4"); 
  } 

  elseif (($k >400)&&($k < 450)) {
    $query = "DELETE FROM slider WHERE id_slide = $k;";
    mysql_query($query) or die("Ошибка удаления" . mysql_error());
    $result = mysql_query("SELECT * FROM slider");
    while($row = mysql_fetch_array($result)){
      if($row['id_slide']>$k){
        echo $k;
        $id_old = $row['id_slide'];
        $id_new = $id_old-1;
        $numb_old = $row['number'];
        $numb_new = $numb_old-1;
        echo $id_old, $id_new, $numb_old, $numb_new;
        $query = "UPDATE slider SET id_slide = '$id_new', number = '$numb_new' WHERE id_slide = '$id_old';";
        mysql_query($query) or die("Ошибка удаления" . mysql_error()); 
      }
    }
    header("Location: home_admin.php?page=400");  
  }

  elseif (($k >800)&&($k < 1000)) {
    $query = "DELETE FROM projects WHERE id_project = $k;";
    mysql_query($query) or die("Ошибка удаления" . mysql_error()); 
    header("Location: home_admin.php?page=3"); 
  }

  elseif (($k >10)&&($k < 50)) {
    $query = "DELETE FROM usp WHERE id_usp = $k;";
    mysql_query($query) or die("Ошибка удаления" . mysql_error()); 
    header("Location: home_admin.php?page=10"); 
  }
?>
