
	<div class="imag">
	 	<?php
				$result = mysql_query("SELECT * FROM works_content");
				while($row = mysql_fetch_array($result)){				
					if($row['id_works'] == $id){
						echo $row['content'];
						}	
				}
			?>
	</div>
