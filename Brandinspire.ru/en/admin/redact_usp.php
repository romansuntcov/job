<div class="admin_main">
	<div class="elem">
		Редактирование USP.
		<div class="admin_title">
			Изменение заголовка и содержимого USP<br>
			Удаление USP.
		</div>
		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  usp");
				while($row = mysql_fetch_array($result)){
					if($k == $row['id_usp']){
						echo "<div class=\"elem\">";
						echo "<form action=\"edit_usp.php\" method=\"post\"><p>Заголовок</p>  <textarea name=\"elem_name\">".($row['title'])."</textarea> <p>Текст</p> <textarea name=\"content\">".($row['text'])."</textarea><input type=\"hidden\" name=\"id_1\" value=\"".$row['id_usp']."\"><input type=\"hidden\" name=\"k\" value=\"".$k."\">";
						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_usp.php'\"; this.form.submit(); > <input type=\"submit\" value=\"удалить\" name=\"delete\" onclick=\"this.form.action = 'delete.php'\"; this.form.submit(); > </form><br></div>";
      				}
      			}
			?>
		</div>
	</div>
</div>