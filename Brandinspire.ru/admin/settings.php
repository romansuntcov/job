<div class="admin_main">
	<div class="elem">
		Редактирование общей информации
		<div class="admin_title">
			Изменение логина и пароля для входа в административную панель.<br>
			Редактирование имени и фамилии пользователя.<br>
			Редактирование ссылок на социальные сети.<br>
			Редактирование фонового изображения в секции What we do(изображения находящегося под синей вставкой).<br>
		</div>
		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  info");
				$row = mysql_fetch_array($result);
			
						echo "<div class=\"elem\">";
					
						echo "<form action=\"edit_client.php\" method=\"post\">
						<p>Логин для входа</p>  
     					<textarea name=\"login\">".($row['login'])."</textarea>
     					<p>Пароль</p> 
     					<textarea  name=\"pass\">".($row['password'])."</textarea>
							
     						<textarea style=\"display:none;\" name=\"name\">".($row['name'])."</textarea>
     						
     						<textarea  style=\"display:none;\"name=\"surname\">".($row['surname'])."</textarea>
     						<textarea  style=\"display:none;\" name=\"facebook\">".($row['facebook'])."</textarea>
     						<textarea style=\"display:none;\" name=\"insta\">".($row['insta'])."</textarea>";

     					
						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_info.php'\"; this.form.submit(); > 
      					 	</form><br></div>";

      					 echo "<form action=\"edit_client.php\" method=\"post\">
						
     					<textarea style=\"display:none;\" name=\"login\">".($row['login'])."</textarea>
     					
     					<textarea style=\"display:none;\" name=\"pass\">".($row['password'])."</textarea>
							<p>Ваше имя</p>  
     						<textarea name=\"name\">".($row['name'])."</textarea>
     						<p>Ваша фамилия</p> 
     						<textarea name=\"surname\">".($row['surname'])."</textarea> 
     						<textarea style=\"display:none;\" name=\"facebook\">".($row['facebook'])."</textarea>
     						<textarea style=\"display:none;\" name=\"insta\">".($row['insta'])."</textarea>";

						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_info.php'\"; this.form.submit(); > 
      					 	</form><br></div>";

      					 	echo "<form action=\"edit_client.php\" method=\"post\">
							
     						<textarea style=\"display:none;\" name=\"login\">".($row['login'])."</textarea>
     						
     						<textarea style=\"display:none;\" name=\"pass\">".($row['password'])."</textarea>
							 
     						<textarea style=\"display:none;\" name=\"name\">".($row['name'])."</textarea>
     						
     						<textarea style=\"display:none;\" name=\"surname\">".($row['surname'])."</textarea>
     						<p>Ссылка на Facebook</p> 
     						<textarea name=\"facebook\">".($row['facebook'])."</textarea>
     						<p>Ссылка на Instagram</p>
     						<textarea name=\"insta\">".($row['insta'])."</textarea>";

						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_info.php'\"; this.form.submit(); > 
      					 	</form><br></div>";
					
					echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
				    	<p>Изменить картинку What we do</p><br> 
						<textarea name=\"content\">".($row['image_wt'])."</textarea> 

      					<input type=\"file\" name=\"filename\"><br> 
      							<input type=\"submit\" value=\"Обновить изображение\"><br>
      							<input type=\"hidden\" name=\"k\" value=\"".$k."\">
      							</form> ";
  						
			?>
	</div>
	</div>
	</div>