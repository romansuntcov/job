<div class="admin_main">
	<div class="elem">
		Редактирование информации списка
		<div class="admin_title">
			Вы можете изменить заголовок и содержимое списка
		</div>

		<div class="redaction">
			<?php
				if(($k > 1200)&&($k <1300))
					$y="branding";
				elseif(($k > 1300)&&($k <1400))
					$y="design";
				elseif(($k > 1400)&&($k <1500))
					$y="content";
				elseif(($k > 1500)&&($k <1600))
					$y="promotion";
				$result_2 = mysql_query("SELECT * From  $y");
				while($row_2 = mysql_fetch_array($result_2)){
					if($k == $row_2['id_point']){
					    echo "<div class=\"elem\">";
						echo "<form action=\"edit_branding.php\" method=\"post\">
						<p>Заголовок списка</p>  
     					<textarea name=\"elem_name\">".($row_2['title'])."</textarea> 
     					<p>Cписок</p> 
     					<textarea name=\"text\">".($row_2['points'])."</textarea>
     					
  						<input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id_point']."\">
  						<input type=\"hidden\" name=\"k\" value=\"".$k."\">";
					    echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_branding.php'\"; this.form.submit(); >";
					    echo "</div>";
					}
				}		
			?>
		</div>
	</div>
</div>