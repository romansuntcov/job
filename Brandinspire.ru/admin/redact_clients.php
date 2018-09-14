<div class="admin_main">
	<div class="elem">
		Редактирование информации о клиентах
		<div class="admin_title">
			Изменение названия, логотипа и ссылки клиента. Удаление клиента.<br>
			Если вы хотите изменить Логотип, в секции "Обновить логотип" выберите картинку и нажмите на кнопку "Обновить логотип".<br><br>
			!!!Пожалуйста, загружайте картинки разрешением не привышающим 180(ширина)x80(высота) пикселей, иначе могут возникнуть проблемы с отображением логотипа!!!<br><br>
		</div>

		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  clients");
				while($row = mysql_fetch_array($result)){
					if($k == $row['id_client']){
						echo "<div class=\"elem\">";
						echo "<form action=\"edit_client.php\" method=\"post\">
						<p>Название фирмы клиента</p>  
     					<textarea name=\"elem_name\">".($row['title'])."</textarea>
     					<p>Сcылка на сайт клиента</p> 
     					<textarea name=\"link\">".($row['link'])."</textarea>
     					<p>Логотип клиента</p> 
     					<textarea name=\"image\">".($row['icons'])."</textarea>
  						<input type=\"hidden\" name=\"id_1\" value=\"".$row['id_client']."\">
  						<input type=\"hidden\" name=\"k\" value=\"".$k."\">";
						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_client.php'\"; this.form.submit(); > 
      					<input type=\"submit\" value=\"удалить клиента\" name=\"delete\" onclick=\"this.form.action = 'delete.php'\"; this.form.submit(); > </form><br></div>";
						echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\"><p>Обновить Логотип</p><br> <input type=\"file\" name=\"filename\"><br> <input type=\"submit\" value=\"Обновить логотип\"><br><input type=\"hidden\" name=\"k\" value=\"".$k."\"></form> ";
  					}
  				}
			?>
		</div>
	</div>
</div>