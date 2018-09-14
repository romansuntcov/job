<div class="admin_main">
	<div class="elem">
		Редактирование отдельных элементов раздела What we do?
		<div class="admin_title">
			Изменение подписи и текста элемента на главной странице.<br>
			Изменение заголовка и текста внутри выдвигающегося элемента.
		</div>
		<div class="redaction">
			<?php
				$result = mysql_query("SELECT * From  what_we_do");
				while($row = mysql_fetch_array($result)){
			
					if($k == $row['id_what']){
						echo "<div class=\"elem\">";
					
						echo "<form action=\"edit_what.php\" method=\"post\">
						<p>Подпись элемента на главной странице</p>  
     					<textarea name=\"elem_name\">".($row['title'])."</textarea> 
     					<p>Текст элемента на главной странце</p> 
     					<textarea name=\"text\">".($row['text'])."</textarea>
     					<p>Заголовок внутри выдвигающегося элемента</p> 
     					<textarea name=\"full_title\">".($row['full_title'])."</textarea>
     					<p>Текст внутри выдвигающегося элемента</p> 
     					<textarea name=\"full_content\">".($row['full_content'])."</textarea>
  						<input type=\"hidden\" name=\"id_1\" value=\"".$row['id_what']."\">
  						<input type=\"hidden\" name=\"k\" value=\"".$k."\">";
					echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_what.php'\"; this.form.submit(); >";
					
					echo "</div>";
					echo "<p>Редактирование отдельных элементов внутри всплывающего окна</p>";
			    	
					
					if($k == 501){
					    $result = mysql_query("SELECT * From  branding");
					    echo "<ul class=\"seznam\">";
					    while($row = mysql_fetch_array($result)){
						    echo "<li><a href=\"?page=".$row['id_point']."\">".$row['title']."</a></li>";
					    }
					    echo "</ul>";
					}
					    
					if($k == 502){ 
					    $result = mysql_query("SELECT * From  design");
					    echo "<ul class=\"seznam\">";
					    while($row = mysql_fetch_array($result)){
						    echo "<li><a href=\"?page=".$row['id_point']."\">".$row['title']."</a></li>";
					    }
					    echo "</ul>";
					}
					
					if($k == 503){ $result = mysql_query("SELECT * From  content");
					    echo "<ul class=\"seznam\">";
					    while($row = mysql_fetch_array($result)){
						    echo "<li><a href=\"?page=".$row['id_point']."\">".$row['title']."</a></li>";
					    }
					   echo "</ul>";
					}
					
					if($k == 504){ $result = mysql_query("SELECT * From  promotion");
					    echo "<ul class=\"seznam\">";
					    while($row = mysql_fetch_array($result)){
						    echo "<li><a href=\"?page=".$row['id_point']."\">".$row['title']."</a></li>";
					    }
					   echo "</ul>";
					}
      					}
  					}
			?>
		</div>
	</div>
</div>