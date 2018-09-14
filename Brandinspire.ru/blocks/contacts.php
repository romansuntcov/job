<div id="contacts">
	<a name="contacts"></a>
	<div class="main">
		<div class="contact">
			<div class="title">
				КОНТАКТЫ
			</div>
			<?php
				$result = mysql_query("SELECT * FROM info");
				while($row = mysql_fetch_array($result)){				
					echo "<div class=\"address\">".$row['address']."</div>";
					echo "<div class=\"phone\">T +".$row['phone']."</div>";		}
			?>
		</div>

		<div class="communication" id="messegeResult">
			<form method="post"  action="javascript:void(0);" id="formMain">
				<textarea name="hello" onfocus="if (this.value == 'Напишите нам!') {this.value=''}"onblur="if (this.value == '') {this.value='Напишите нам!'}">Напишите нам!</textarea>
				<input type="image" src="images/icon_message.png" onclick="AjaxFormRequest('messegeResult', 'formMain', '/blocks/message.php')"/>
			</form>
		</div>

		<div class="social">
			<?php
				$result = mysql_query("SELECT * FROM info");
				$row = mysql_fetch_array($result);
				echo "<div class=\"soc\">";
				echo "<div class=\"icon\"><a href=\"".$row['facebook']."\"><img src=\"images/fb.png\"></a></div>";
				echo "</div>";
				echo "<div class=\"soc\">";
				echo "<div class=\"icon\"><a href=\"".$row['insta']."\"><img src=\"images/inst.png\"></a></div>";
				echo "</div>";
			
			?>
		</div>
	</div>
</div>