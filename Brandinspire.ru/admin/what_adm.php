<?php
		echo "<p>Редактирование отдельных элементов таблицы what we do</p>";
				$result = mysql_query("SELECT * From  what_we_do");
					echo "<ul class=\"seznam\">";
					while($row = mysql_fetch_array($result)){
						echo "<li><a href=\"?page=".$row['id_what']."\">".$row['title']."</a></li>";
					}
					echo "</ul>";
  					
?>