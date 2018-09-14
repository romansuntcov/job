
<div class="n1">
	<div id="studio">
		<a name="studio"></a>
	</div>
	<div class="title_3">
		<div class="num_img_3">
			
		</div>

		<div class="tit_n3">
			<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 53){
						echo $row['title'];
					}
				}
			?>
		</div>

	</div>

	<div class="t2">
	 	<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 53){
						echo $row['content'];
						}	
				}
			?>
	</div>
</div>