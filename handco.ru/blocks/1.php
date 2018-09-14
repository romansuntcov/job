<div class="n1">

	<div class="title">
		<div class="num_img_1">
			
		</div>

		<div class="tit_t">
			<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 51){
						echo $row['title'];
					}
				}
			?>
		</div>

	</div>

	<div class="text">
	 	<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 51){
						echo $row['content'];
						}	
				}
			?>
	</div>
	<div align="center" class="scroll">
		
	</div>
	
</div>