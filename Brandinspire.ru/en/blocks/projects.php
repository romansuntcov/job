<div id="projects">
	<a name="projects"></a>
	<div class="title">
		<?php
			$result = mysql_query("SELECT * FROM main");
			while($row = mysql_fetch_array($result)){
				if($row['id_main'] == $i){
					echo $row['title'];
				}
			}
			$i++;
		?>
	</div>
	<div class="hor_scroll">
		<img src="../images/hor_scroll.png">
	</div>
	<div class = "projects_content">
		<?php
			$result = mysql_query("SELECT * FROM projects");
			while($row = mysql_fetch_array($result)){
				echo "<div class=\"project_mini\">";
				echo "<a href=\"".$row['link']."\"><div class=\"img_project\">".$row['main_img']."</div></a></div>";
			}
		?>
	</div>
</div>
		
		
		
	