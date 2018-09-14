<div id="usp">
	<?php
		$result = mysql_query("SELECT * FROM usp");
		$end = 10;
			while($row = mysql_fetch_array($result)){
				$end ++;
			}
		$result = mysql_query("SELECT * FROM usp");
		while($row = mysql_fetch_array($result)){				
			if($end == $row['id_usp'])
			    echo "<div class=\"usp\" id=\"end\">";
			else
				echo "<div class=\"usp\">";
				echo "<div class=\"title_usp\"><img src=\"/images/plus.png\">".$row['title']."</div>";
				echo "<div class=\"text_usp\">".$row['text']."</div>";
				echo "</div>";
		}
	?>
</div>