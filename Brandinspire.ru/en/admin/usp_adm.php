<div class="admin_main">
				<div class="elem">
					USP
					<div class="admin_title">
						Изменение элементов USP
					</div>
					<div class="redaction">
						Возможность редакстирования элементов USP.<br>Удаление или добавление новых элементов. 
					</div>
				</div>
				
				<?php
					$i=1;
					$result = mysql_query("SELECT * From  usp");
					echo "<ul class=\"seznam\">";
					while($row = mysql_fetch_array($result)){
						echo "<li><a href=\"?page=".$row['id_usp']."\">".$row['title']."</a></li>";
					}
					echo "</ul>";
					echo "<div class=\"add\">
				<form action=\"add_usp.php\">
					<input type=\"Submit\" name=\"Add\" value=\"Создать\">
					<input type=\"hidden\" name=\"k\" value=\"".$k."\"></form></div>";
				?>
				

			</div>
		</div>