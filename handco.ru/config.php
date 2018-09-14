
<!--Подключение к базе данных-->
<?php
	$dblocation = "localhost";
	$dbname = "igorrnaumovv_handco";
	$dbuser = "046283136_handco";
	$dbpasswd = "Lenovo18";
	$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
	if (!$dbcnx) 
	{
  		echo( "<P>В настоящий момент сервер базы данных не доступен, поэтому 
            корректное отображение страницы невозможно.</P>" );
  		exit();
	}
	if (!@mysql_select_db($dbname, $dbcnx)) 
	{
  		echo( "<P>В настоящий момент база данных не доступна, поэтому
            корректное отображение страницы невозможно.</P>" );
 	 exit();
	}
	mysql_query ("SET CHARACTER SET 'utf8'", $dbcnx);
	mysql_query ("set character_set_client='utf8'");
	mysql_query ("set character_set_results='utf8'");
	mysql_query ("set collation_connection='utf8_general_ci'");
	mysql_query ("SET NAMES utf8");
?>