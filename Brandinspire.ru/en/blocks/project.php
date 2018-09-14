<div id="project">
	<?php
		$result = mysql_query("SELECT * FROM projects");
		while($row = mysql_fetch_array($result)){
			$j = $row['id_project'] - 800;
			if($id == $j){
				echo $row['content'];
			}
		}
	?>
</div>
		
		
		
	