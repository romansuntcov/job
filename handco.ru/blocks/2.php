<div id="works">
		<a name="works"></a>
	</div>
<div class="n1">
	
	<div class="title">
		<div class="num_img_2">
			
		</div>

		<div class="tit_t">
			<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 52){
						echo $row['title'];
						}	
				}
			?>
		</div>

	</div>

	
	<div class="works">
	 	
		<?php
			$result = mysql_query("SELECT * FROM works");
			while($row = mysql_fetch_array($result)){		
					echo "<div class=\"work\">
							<a href=\"".$row['link']."\">
							
							<img src=\"".$row['img']."\">
							<div class=\"work_cl\">
							<div class=\"work_t\">".$row['title']."</div>
							<div class=\"work_sub\">".$row['content']."</div></div></a></div>";			
			}
			
		?>
	 	
	</div>


</div>
