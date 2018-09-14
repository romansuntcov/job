<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>handco</title>
	<META NAME="keywords" CONTENT="разработка сайтов, сайты под ключ, фирменный стиль, разработка логотипов, разработка стилей, хэндко, дизайн, стили, сайты на заказ, agency, handco, design, web, logotypes, styles, design agency">
    <META NAME="description" CONTENT="Handco — это агентство специализирующееся на разработке сайтов под ключ и фирменных стилей.">
        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		
		@font-face{
			font-family: agora-medium;
			src:url(styles/PF-agora/PFAgoraSansPro-Medium.ttf);	
		}
		@font-face{
			font-family: agora-light;
			src:url(styles/PF-agora/PFAgoraSansPro-Light.ttf);	
		}
		@font-face{
			font-family: PTSerif;
			src:url(styles/ptserif/ptserif.ttf);	
		}
		@font-face{
			font-family: OpenSans;
			src:url(styles/opensans/opensans.ttf);	
		}

	</style>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script>
	<script src="jquery-3.0.0.min.js"></script>
    <script src="scripts/my_scripts.js"></script>
	

</head>
<body>



	<?php
		include ('config.php');
	?> 

		<?php
			if(empty($_GET["work"])){
				echo "<div id=\"page\">";
				include ('blocks/header.php');
				include ('blocks/1.php');
				include ('blocks/2.php');
				include ('blocks/3.php');
				include ('blocks/4.php');
				echo "</div>";	
			}
			elseif(($_GET["work"]>99)){
				$id=($_GET["work"]);
				echo "<div id=\"page\">";
				include ('blocks/header_w.php');
				include ('blocks/work.php');
				
				echo "</div>";
			}
		?>


</body>
</html>