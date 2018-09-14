<div class="admin_main">
	<div class="elem">
		Полное редактирование отдельного слайда
		<div class="admin_title">
			Изменение подписи внутри слайда.<br>
			<br>Также можно удалить слайд.
		</div>
		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  slider");
				while($row = mysql_fetch_array($result)){
					if($k == $row['id_slide']){
						echo "<div class=\"elem\">";
						echo "<form action=\"edit_slide.php\" method=\"post\">
							<p>Подпись внутри слайда</p>  
     						<textarea name=\"elem_name\">".($row['title'])."</textarea> 
     						<p>Изображение внутри слайда</p>
     						<textarea name=\"image\"><img src=\"".($row['image'])."\"></textarea>
  							<input type=\"hidden\" name=\"id_1\" value=\"".$row['id_slide']."\">
  							<input type=\"hidden\" name=\"k\" value=\"".$k."\">";
						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_slide.php'\"; this.form.submit(); > 
      						<input type=\"submit\" value=\"удалить\" name=\"delete\" onclick=\"this.form.action = 'delete.php'\"; this.form.submit(); > </form><br></div>";
					
						echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
				    		<p>Обновить слайд</p><br> 
							<textarea style=\"display:none;\" name=\"content\">".($row['image'])."</textarea> 
      						<input type=\"file\" name=\"filename\"><br> 
      						<input type=\"submit\" value=\"Обновить картинку слайдера\"><br>
      						<input type=\"hidden\" name=\"k\" value=\"".$k."\">
      						</form> ";
  					}
  				}
			?>
		</div>
	</div>
</div>