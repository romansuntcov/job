<?php
	echo "<p>Редактирование отдельных проектов</p>";
	$result = mysql_query("SELECT * From  projects");
	echo "<ul class=\"seznam\">";
	while($row = mysql_fetch_array($result)){
		echo "<li><a href=\"?page=".$row['id_project']."\">".$row['title']."</a></li>";
	}
	echo "</ul>";
	echo "<form action=\"add_project.php\"><input type=\"Submit\" name=\"Add\" value=\"Создать проект\"><input type=\"hidden\" name=\"k\" value=\"".$k."\"></form></div>";
?>