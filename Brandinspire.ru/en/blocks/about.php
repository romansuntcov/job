<div id="about">
	<a name="about"></a>
	<div class="about_mob"><img src="/images/about_mob.png"></div>
	<div class="img_about">
		<img src="../images/about.png">
	</div>
	<div class="hor_scroll">
		<img src="../images/hor_scroll.png">
	</div>
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
	<div class="white">
	<div class="text_about">
	<?php
		$result = mysql_query("SELECT * FROM main");
		while($row = mysql_fetch_array($result)){
			if($row['id_main'] == $i){
				echo $row['content'];
			}

		}
		$i++;
	?>
	</div>
	<div class="opac"></div>
	</div>
</div>