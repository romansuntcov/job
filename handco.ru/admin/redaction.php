<div class="admin_main">
	<div class="elem">
		Редактирование страниц
		<div class="admin_title">
			Изменение/удаление/добавление элементов страниц "Работы"
		</div>
		<div class="redaction">
			Выберите интересующий Вас элемент для его редакции.
			<?php
				$result = mysql_query("SELECT * From  works");
				echo "<ul class=\"seznam\">";
				while($row = mysql_fetch_array($result)){
					echo "<li><a href=\"".$row['link']."\">".$row['title']."</a></li>";
				}
				echo "</ul>";
			?>
			<div class="add">
				<form action="add_page.php">
					<input type="Submit" name="Add" value="Создать">
				</form>
			</div>
		</div>

	</div>				
</div>