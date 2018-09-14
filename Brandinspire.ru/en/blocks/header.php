<div id="menu">
	<a href="index.php"><div class="logo"></div></a>
	<div class="lang">
		<div class="vis"><a href="http://brandinspire.ru/">EN</a><div class="vis_img"><img src="../images/eng.png"></div></div>
		<div class="hid" style="display:none;"><a href="http://brandinspire.ru">RU</a></div>
	</div>
	
	<div class="burger-menu">
	    <a href="javascript:void(0)" onclick="showHide('mob')">
			<div class="bur"></div><img widht="45" height="20" src="/images/Burger.png"></div>
	    </a>

	    <div id="mob">
            <div class="close">
	            <a href="javascript:void(0)" onclick="showHide('mob')">
	             <img widht="56" height="51" src="/images/close.png">
	            </a>
	        </div> 
	        <?php
			    echo "<ul>";
			    $result = mysql_query("SELECT * FROM menu");
			    $end = 0;
				while($row = mysql_fetch_array($result)){
				    $end ++;
				}
				$result = mysql_query("SELECT * FROM menu");
			    while($row = mysql_fetch_array($result)){				
				    if($end == $row['id_menu']){
			            echo "<li id=\"end\"><a href=\"#".$row['link']."\">".$row['title']."</a></li>";
			        }
			        else
				    	echo "<li><a href=\"#".$row['link']."\">".$row['title']."</a></li>";			
		    	}
			    echo "</ul>";
		    ?>
		</div>

		<div id="nav">
			<?php
				$result = mysql_query("SELECT * FROM menu");
				echo "<ul>";
				while($row = mysql_fetch_array($result)){				
				echo "<li><a href=\"#".$row['link']."\">".$row['title']."</a></li>";			
				}
				echo "</ul>";
			?>
		</div>
	</div>