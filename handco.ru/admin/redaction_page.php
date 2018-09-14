<div class="admin_main">
	<div class="elem">
		Редактирование элементов
		<div class="admin_title">
			Редактирование/удаление элемента из раздела "Работы"
		</div>
		<div class="redaction">
			Возможность редактирования главной картинки(отображается на главной странице).<br>Изменение заголовка и подписи под главной картинкой.<br>Редактирование содержимого страницы с работой.
		</div>
	</div>
		
</form>	
	<?php
		$result = mysql_query("SELECT * From  works");			
		while($row = mysql_fetch_array($result)){
			
			if($k == $row['id']){
				echo "<div class=\"elem\">";
				$result_2 = mysql_query("SELECT * From  works_content");
				echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
				    <p>Главная картинка</p> 
					<textarea name=\"image\">".($row['img'])."</textarea>
					<input type=\"hidden\" name=\"id_1\" value=\"".$row['id']."\">
      				<input type=\"file\" name=\"filename\"><br> 
      				<input type=\"submit\" value=\"Загрузить\"><br>
      				<input type=\"hidden\" name=\"k\" value=\"".$k."\">
      			</form> 
      			
      			<form action=\"edit_work.php\" method=\"post\">
					<p>Заголовок</p>  
     				<textarea name=\"title\">".($row['title'])."</textarea>
     				<p>Подпись</p>
     				<textarea name=\"text\">".($row['content'])."</textarea> 
  					<input type=\"hidden\" name=\"id_1\" value=\"".$row['id']."\">
  					<input type=\"hidden\" name=\"k\" value=\"".$k."\">";


				while($row_2 = mysql_fetch_array($result_2)){
					if($row['id'] == $row_2['id_works']){
						echo "<p>Текст</p> 
     					<textarea name=\"content\">".($row_2['content'])."</textarea>
  						<input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id']."\">";
  						}
				}
				echo "<input type=\"submit\" value=\"удалить\" name=\"delete\" onclick=\"this.form.action = 'delete_page.php'\"; this.form.submit(); > 
      				<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_work.php'\"; this.form.submit(); > </form><br></div>";
      				$result_2 = mysql_query("SELECT * From  works_content");
      			while($row_2 = mysql_fetch_array($result_2)){
					if($row['id'] == $row_2['id_works']){
						echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
				    <p>Загрузить картинку:</p><br> 
					<textarea name=\"content\">".($row_2['content'])."</textarea> 
					<input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id']."\">
      				<input type=\"file\" name=\"filename\"><br> 
      				<input type=\"submit\" value=\"Загрузить\"><br>
      				<input type=\"hidden\" name=\"k\" value=\"".$k."\">
      			</form> ";
  						}
				}
      			
			}
		}
	?>
</div>