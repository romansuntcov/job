<?php
	$result = mysql_query("SELECT * From  info");
	$row = mysql_fetch_array($result);
	echo "<div class=\"elem\">";
	echo "<form action=\"edit_contacts.php\" method=\"post\">p>Контактная информация</p>  <textarea name=\"address\">".($row['address'])."</textarea><textarea name=\"phone\">".($row['phone'])."</textarea><input type=\"hidden\" name=\"k\" value=\"".$k."\">";
  	echo "<input type=\"submit\" value=\"изменить\" name=\"edit\" onclick=\"this.form.action = 'edit_contacts.php'\"; this.form.submit(); > </form><br></div>";
    echo "<p>Клиенты</p>";
	$result = mysql_query("SELECT * From  clients");
	echo "<ul class=\"seznam\">";
	while($row = mysql_fetch_array($result)){
		echo "<li><a href=\"?page=".$row['id_client']."\">".$row['title']."</a></li>";
	}
	echo "</ul>";
	echo "<div class=\"add\"><form action=\"add_client.php\"><input type=\"Submit\" name=\"Add\" value=\"Создать\"><input type=\"hidden\" name=\"k\" value=\"".$k."\"></form></div>";
?>
