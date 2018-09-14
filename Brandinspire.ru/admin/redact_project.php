<div class="admin_main">
	<div class="elem">
		Полное редактирование проекта
		<div class="admin_title">
			Изменение названия и превью-картинки проекта. Удаление проекта.<br>
			Если вы хотите изменить превью то просто нажмите на кнопку "Обновить превью".<br>Вы можете загружать картинки любых размеров, они будут автоматически растягиваться/сжиматься под размеры 560(ширина) на 560(высота) пикселей. Вы можете подготовить картинки соответсвующих размеров сами, чтобы не возникало проблем с "качеством"/"размытием" изображения.<br>
			<br><br>
			Также вы можете полностью изменить содержимое отдельной страницы проекта. Написать свой текст, вставить картинки и т.д. Чтобы удалить картинку, просто сотрите ее в окне "содержимое отдельной страницы" и сохраните изменения.<br> 
			P.S. Многие наши клиенты подготавливают огромное изображение-описание своего проекта(узкую, но длинную картинку) и просто загружают ее в содержимое страницы.<br>Такой подход позволяет сохранить время и поможет получить желаемый результат на все 100%!
		</div>
		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  projects");
				while($row = mysql_fetch_array($result)){
					if($k == $row['id_project']){
						echo "<div class=\"elem\">";
						echo "<form action=\"edit_project.php\" method=\"post\">
						<p>Название проекта</p>  
     					<textarea name=\"elem_name\">".($row['title'])."</textarea> 
     					<p>Превью-изображение для главной страницы</p> 
     					<textarea name=\"image\">".($row['main_img'])."</textarea>
     					<textarea style=\"display:none;\" name=\"content\">".($row['content'])."</textarea>
  						<input type=\"hidden\" name=\"id_1\" value=\"".$row['id_project']."\">
  						<input type=\"hidden\" name=\"k\" value=\"".$k."\">";
  					echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_project.php'\"; this.form.submit(); >";
      			echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\"><p>Обновить превью-картинку</p><br> <textarea style=\"display:none;\" name=\"main_img\">".($row['main_img'])."</textarea> <input type=\"file\" name=\"filename\"><br> <input type=\"submit\" value=\"Загрузить\"><br><input type=\"hidden\" name=\"k\" value=\"".$k."\"><input type=\"hidden\" name=\"ind\" value=\"1\"></form> ";
            echo "<form action=\"edit_project.php\" method=\"post\">
     					<p>Содержимое отдельной страницы проекта</p> 
     					<textarea style=\"display:none;\" name=\"elem_name\">".($row['title'])."</textarea> 
     					<textarea style=\"display:none;\" name=\"image\">".($row['main_img'])."</textarea>
     					<textarea name=\"content\">".($row['content'])."</textarea>
  						<input type=\"hidden\" name=\"id_1\" value=\"".$row['id_project']."\">
  						<input type=\"hidden\" name=\"k\" value=\"".$k."\">";
  					echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_project.php'\"; this.form.submit(); >";
      			echo	"<input type=\"submit\" value=\"удалить страницу\" name=\"delete\" onclick=\"this.form.action = 'delete.php'\"; this.form.submit(); > </form><br></div>";
					  echo "<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\"><p>Загрузить картинку</p><br> <textarea style=\"display:none;\" name=\"content\">".($row['content'])."</textarea> <input type=\"file\" name=\"filename\"><br> <input type=\"submit\" value=\"Загрузить\"><br><input type=\"hidden\" name=\"ind\" value=\"2\"><input type=\"hidden\" name=\"k\" value=\"".$k."\"></form> ";
  					}
  				}
			?>
		</div>
	</div>
</div>