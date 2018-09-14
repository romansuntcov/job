<div id="clients">
	<a name="clients"></a>
	<div class="title">
		<?php
			$result = mysql_query("SELECT * FROM main");
			while($row = mysql_fetch_array($result)){
				if($row['id_main'] == $i){
					echo $row['title'];
				}
			}
		?>
	</div>
	<div class="hor_scroll">
		<img src="../images/hor_scroll.png">
	</div>
</div>
<div id="content_cl">
	<div class="main">
		<div class="clients">
		<?php
			$result = mysql_query("SELECT * FROM clients");
			while($row = mysql_fetch_array($result)){
				echo "<div class=\"client\">";
				echo "<div class=\"icon\"><a href=\"".$row['link']."\">".$row['icons']."</a></div>";
				echo "</div>";
			}
		?>			
		</div>
	</div>
</div>
		
		
	