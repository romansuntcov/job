<div class="admin_main">
				<div class="elem">
					Главная страница
					<div class="admin_title">
						Изменение элементов главной страницы
					</div>
					<div class="redaction">
						Возможность редактирования элементов главного(верхнего) меню и соответствующих им разделов на странице.<br>Возможнсть изменение заголовков и внутреннего содержания разделов.<br>Элементы раздела "Работы" формируются из страниц созданных пользователем в меню "Редакция страниц".
					</div>
				</div>
				
				<?php
					$i=1;
					$result = mysql_query("SELECT * From  menu");
					
					while($row = mysql_fetch_array($result)){
						echo "<div class=\"elem\">";
						$result_2 = mysql_query("SELECT * From  main");
    					echo "Элемент главного меню № = $i";
    					$i++;
						echo  "<form action=\"edit_menu.php\" method=\"post\">  
     					<textarea  name=\"elem_name\" >
     					".($row['title'])."</textarea> 
  						<input type=\"hidden\" name=\"id_1\" value=\"".$row['id']."\"> 
     					<p>Заголовок</p>";

							while($row_2 = mysql_fetch_array($result_2)){
								if($row['id'] == $row_2['menu_id']){
								echo "<textarea name=\"title\">".($row_2['title'])."</textarea> 
         						<p>Текст</p> 
     							<textarea name=\"text\">".($row_2['content'])."</textarea>
  								<input type=\"hidden\" name=\"id_2\" value=\"".$row_2['id']."\"> ";
  								}
							}
						echo "<input type=\"submit\" value=\"изменить\" name=\"edit\"> </form><br></div>";
					}
				?>
		</div>