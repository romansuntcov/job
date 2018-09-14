<div class="admin_main">
				<div class="elem">
					Слайдер
					<div class="admin_title">
						Изменение элементов слайдера
					</div>
					<div class="redaction">
						Возможность редактирования элементов слайдера.<br>Возможность редактирования каждого слайда, его удаления, а также добавление новых слайдов.<br><br>!!!Пожалуйста, не добавляйте на страницу больше 8 слайдов!!!<br><br>Для получения большей информации пройдите на соответствующий слайд. 
					</div>
				</div>
				
				<?php
					$i=1;
					$result = mysql_query("SELECT * From  slider");
					echo "<ul class=\"seznam\">";
					while($row = mysql_fetch_array($result)){
						echo "<li><a href=\"?page=".$row['id_slide']."\">Слайдер № = ".$row['number']."</a></li>";
					}
					echo "</ul>";
					echo "<div class=\"add\">
				<form action=\"add_slide.php\">
					<input type=\"Submit\" name=\"Add\" value=\"Создать\">
					<input type=\"hidden\" name=\"k\" value=\"".$k."\"></form></div>";
				?>
				

			</div>
		</div>