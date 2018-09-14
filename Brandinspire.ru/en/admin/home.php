<div class="admin_main">
	<div class="elem">
		Главная страница
		<div class="admin_title">
		Изменение элементов главной страницы
		</div>
		<div class="redaction">
			Возможность редактирования элементов главного(верхнего) меню и соответствующих им разделов на странице.<br>Возможность изменение заголовков и внутреннего содержания разделов.<br>Для получения большей информации пройдите на соответствующий раздел.
		</div>
	</div>
				
	<?php
		$i=1;
		$result = mysql_query("SELECT * From  menu");
		echo "<ul class=\"seznam\">";
		while($row = mysql_fetch_array($result)){
			echo "<li><a href=\"?page=".$row['id_menu']."\">".$row['title']."</a></li>";
		}
		echo "</ul>";
	?>
				

	</div>
</div>