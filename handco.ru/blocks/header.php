
<div id="menu" class="default">
    <div class="burger-menu">
	    <a href="javascript:void(0)" onclick="showHide('mob')">
		    <img widht="45" height="20" src="images/Burger.png">
	    </a>
	    <div id="mob">
            <div class="close">
	            <a href="javascript:void(0)" onclick="showHide('mob')">
	             <img widht="56" height="51" src="images/close.png">
	            </a>
	        </div> 
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

	<div class="logo">
		<a href="http://handco.ru"><img width='118' height='40' src="images/logo.png"></a>
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

	<div id="about">
	<a name="about"></a>
	</div>