
<div class="contacts">
	<div id="contacts">
		<a name="contacts"></a>
	</div>
	<div class="map">
		
	</div>

	<div class="cont_text">
		<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 54){
						echo $row['title'];
						}	
				}
			?>
		<div class="tel">
			<?php
				$result = mysql_query("SELECT * FROM main");
				while($row = mysql_fetch_array($result)){				
					if($row['id'] == 54){
						echo $row['content'];
						}	
				}
			?>
		</div>
		<ul class="social">
			<li class="logos">
				<a href="https://www.facebook.com/handcoteam"  target="_blank">facebook</a>
			</li>
			<li class="logos">
				<a href="https://www.instagram.com/handcoteam/"  target="_blank">instagram</a>
			</li>
			<li class="logos">
				<a href="https://www.behance.net/HandCo"  target="_blank">behance</a>
			<li class="logos">
				<a href="https://dribbble.com/Handco"  target="_blank">dribbble</a>
			</li>
		</ul>
	</div>
</div>
<div id="k"></div>