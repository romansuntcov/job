<div class="admin_main">
	<div class="elem">
		Редактирование страниц
		<div class="admin_title">
			Изменение/удаление элемента а также его содержимого
		</div>

		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  menu");
				while($row = mysql_fetch_array($result)){
					if($k == $row['id_menu']){
						echo "<div class=\"elem\">";
						$result_2 = mysql_query("SELECT * From  main");
						echo "<form action=\"edit_menu.php\" method=\"post\"><p>Название элемента меню</p>  <textarea name=\"elem_name\">".($row['title'])."</textarea><input type=\"hidden\" name=\"id_1\" value=\"".$row['id_menu']."\"><input type=\"hidden\" name=\"k\" value=\"".$k."\">";

  					while($row_2 = mysql_fetch_array($result_2)){
  						if($row['id_menu'] == $row_2['id_menu']){
							echo "<p>Заголовок элемента на странице</p><textarea name=\"title\">".($row_2['title'])."</textarea>";
     						if(($k > 1)&&($k < 5)){
     							echo "<p>Текст</p> <textarea  style=\"display:none;\" name=\"text\">".($row_2['content'])."</textarea>
  								<input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id_main']."\">";
  							}
  							else{
  								echo "<p>Текст</p> <textarea  name=\"text\">".($row_2['content'])."</textarea><input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id_main']."\">";
  							}
  						}
					}
					echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_menu.php'\"; this.form.submit(); > <input type=\"submit\" value=\"удалить\" name=\"delete\" onclick=\"this.form.action = 'delete_menu.php'\"; this.form.submit(); > </form><br></div>";
      				if(($k == -1)||(($k>4)&&($k<10))){
      					$result_2 = mysql_query("SELECT * From  main");
      					while($row_2 = mysql_fetch_array($result_2)){
							if($row['id_menu'] == $row_2['id_menu']){
								echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
				    			<p>Загрузить картинку:</p><br> 
								<textarea style=\"display:none;\" name=\"content\">".($row_2['content'])."</textarea> 
								<input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id_main']."\">
      							<input type=\"file\" name=\"filename\"><br> 
      							<input type=\"submit\" value=\"Загрузить\"><br>
      							<input type=\"hidden\" name=\"k\" value=\"".$k."\">
      							</form> ";
  							}
						}
					}
				}
			}
			if($k == 2)
				include('what_adm.php');
			elseif($k == 3)
				include('projects_adm.php');
			elseif ($k == 4) 
				include('contacts_adm.php');
		?>
		</div>
	</div>				
</div>