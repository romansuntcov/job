<div id="what">
	<a name="what"></a>
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
	</div>
	<div class="content">
		<div class="sub_image">
			<?php
				$result = mysql_query("SELECT * FROM info");
				$row = mysql_fetch_array($result);
				echo $row['image_wt'];
			?>
		</div>
		<div class="main">
			<div class="elements">
				<?php
					$result = mysql_query("SELECT * FROM what_we_do");
			
					while($row = mysql_fetch_array($result)){
						echo "<div  class=\"element\">";
						echo "<div class=\"icon\"><img  src=\"".$row['icons']."\"></div>";
						echo "<div class=\"title_elem\">".$row['title']."</div>";
						echo "<div class=\"text_elem\">".$row['text']."</div>";
						echo "<div id=\"".$row['id_what']."\" class=\"more\">learn more</div>";
						echo "</div>";
					}
					$i++;
				?>			
			</div>
		</div>
	</div>
	<?php
		$result = mysql_query("SELECT * FROM what_we_do");
		while($row = mysql_fetch_array($result)){
			$h = $row['id_what'] + 200;
			echo "<div id=\"".$h."\" class=\"full_content\"><div class=\"close\"><img  src=\"/images/close.png\"></div>";
			echo "<div class=\"left_table\"><div class = \"full_text\">";
			echo "<div class=\"title_full\">".$row['full_title']."<img src=\"/images/white_line.png\"></div>";
			echo "<div class=\"txt_full\">".$row['full_content']."</div></div>";
			echo "</div>";
					
			if($row['id_what'] == 501){
				$result_2 = mysql_query("SELECT * FROM branding");
				echo "<div class=\"right_table\">";
				while($row_2 = mysql_fetch_array($result_2)){
				    echo "<div class=\"point\"><div class=\"title_point\">".$row_2['title']."</div><div class=\"txt_point\">".$row_2['points']."</div></div>";
					}
				echo "</div>"; 
				}
			if($row['id_what'] == 502){
				$result_2 = mysql_query("SELECT * FROM design");
				echo "<div class=\"right_table\">";
				while($row_2 = mysql_fetch_array($result_2)){
				    echo "<div class=\"point\"><div class=\"title_point\">".$row_2['title']."</div><div class=\"txt_point\">".$row_2['points']."</div></div>";
				}
				echo "</div>";
			}
			if($row['id_what'] == 503){
				$result_2 = mysql_query("SELECT * FROM content");
				echo "<div class=\"right_table\">";
				while($row_2 = mysql_fetch_array($result_2)){
				    echo "<div class=\"point\"><div class=\"title_point\">".$row_2['title']."</div><div class=\"txt_point\">".$row_2['points']."</div></div>";
				}
				echo "</div>";
			}
			if($row['id_what'] == 504){
				$result_2 = mysql_query("SELECT * FROM promotion");
				echo "<div class=\"right_table\">";
				while($row_2 = mysql_fetch_array($result_2)){
				    echo "<div class=\"point\"><div class=\"title_point\">".$row_2['title']."</div><div class=\"txt_point\">".$row_2['points']."</div></div>";
				        }
				echo "</div>";
			}
			echo "</div>";
		}
	?>					
</div>