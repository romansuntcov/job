<?php
 session_start();

 if(!isset($_SESSION['logged_user'])){
     header("Location: ../index.php");
     exit;
 }
 if(empty($_GET["page"])){
	$k=0;
 }
 else{
	$k = htmlspecialchars($_GET["page"]);;
 }
 ?>
 <html>
 <head>
 <meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script>
  	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  	<script>
  		tinymce.init({ 

  			selector:'textarea',
  			force_br_newlines : true,
        	force_p_newlines : false,
        	forced_root_block : '',

        	 plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste"
  ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  relative_urls: false
  		});
  	</script>
</head>
<body>
	<?php
		include ('../config.php');
	?> 
	<div id="home_admin">
		<div class="header">
			<div class="hello">
				Привет, Admin!
			</div>
			<div class="search">
				<form action="" method="post">
				
					<input type="image" name="search" src="../images/search.png">
					<input type="text" name="text" value="Поиск по административной панели"onfocus="if (this.value == 'Поиск по административной панели') {this.value=''}" 
					onblur="if (this.value == '') {this.value='Поиск по административной панели'}"/>
				</form>
				
			</div>
			<div class="end">
				<form action="end.php" method="post">
					<input type="image" src="../images/end.png" name="end">
				</form>
			</div>
		</div>
		<div class="cent">
			<div class="ad_menu">

				<div class="ad_logo">
					<img src="../images/logo_ad.png">
				</div>
				<div class="surname">
					<?php
						$result = mysql_query("SELECT * FROM info");
    					$row = mysql_fetch_array($result); 
    					echo $row['surname']." ".$row['name'];
    				?> 
				</div>
				<div class="mail">
					<?php
						$result = mysql_query("SELECT * FROM info");
    					$row = mysql_fetch_array($result); 
    					echo $row['email'];
    				?>
				</div>
				<div class="graph">
					<img src="../images/graph.png">
				</div>

				<?php
					if((($k > -1)&&($k < 10))||(($k > 500)&&($k < 550))||(($k > 800)&&($k<1000))||(($k > 200)&&($k < 300))||($k > 1200)&&($k <1500)){
						include('select_first.php');
					}
					elseif(($k > 399)&&($k < 450)){
						include('select_second.php');
					}
					
					elseif (($k > 9)&&($k < 50)){
						include('select_third.php');
					}
					else
						include('unselect.php');
				?>

				<div class="settings">
					<a href="?page=1000">
						<img src="../images/set.png">
						<div class="text_a">прочие настройки</div>
					</a>
				</div>

			</div>
		</div>
		<?php
			if($k == 0)
				include('home.php');
			elseif(($k > 0)&&($k < 10))
				include('redact.php');
			elseif($k == 400)
				include('slider_adm.php');
			elseif($k == 10)
				include('usp_adm.php');
			elseif($k == 1000)
				include('settings.php');
            
            elseif (($k > 1200)&&($k < 1600)) 
				include('redact_point.php');
			elseif (($k > 10)&&($k < 50)) 
				include('redact_usp.php');
			elseif (($k > 200)&&($k < 300)) 
				include('redact_clients.php');
			elseif (($k > 400)&&($k < 450)) 
				include('redact_slider.php');
			elseif (($k > 500)&&($k < 550)) 
				include('redact_what.php');
			elseif (($k > 800)&&($k < 1000)) 
				include('redact_project.php');
			else{
				include('home.php');
			}
		?>
		

	</div>
</body>
</html>