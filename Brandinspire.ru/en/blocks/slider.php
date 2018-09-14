<div id="slider">
    <div class="slider_mob"><img src="/images/slide_mob.png"></div>
	<div class="slides">
		<div class="full">
			<?php
				$result = mysql_query("SELECT * FROM slider");
				while($row = mysql_fetch_array($result)){
					echo "<div class=\"slide\">";
					echo "<div id=\"c".$row['id_slide']."\" class=\"img_slide\"></div>";
					echo "<div class=\"number\"><img src=\"../images/0".$row['number'].".png\"></div>";
					echo "<div class=\"title_slide\">".$row['title']."<img src=\"../images/line_slider.png\"></div></div>";
				}
			?>	
		</div>
		<div class="circles">
			<?php 
				$max_slide = 0;
				$result = mysql_query("SELECT * FROM slider");
				while($row = mysql_fetch_array($result)){
					$max_slide++;
				}
				for($t = 1; $t < $max_slide+1; $t++){
					if($t == 1){
						echo "<div class=\"circle active\" id=\"1\"></div>";
					}
					else{
						echo "<div class=\"circle\" id=\"".$t."\"></div>";
					}
				}
			?>
		</div>
	</div>
	<div class="procents">
		<div class="scroll"><img src="../images/scroll.png"></div>
		<div id="txt">0%</div>
	</div>	
</div>