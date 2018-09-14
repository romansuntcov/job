<?php
 session_start();

 if(!isset($_SESSION['logged_user'])){
     header("Location: ../index.php");
     exit;
 }
 if(empty($_GET["work"])){
	$k=0;
 }
 else{
	$k = htmlspecialchars($_GET["work"]);;
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
					<img src="../images/logo_adm.png">
				</div>
				<div class="surname">
					<?php
						$result = mysql_query("SELECT * FROM admin");
    					$row = mysql_fetch_array($result); 
    					echo $row['surname']." ".$row['name'];
    				?> 
				</div>
				<div class="mail">
					<?php
						$result = mysql_query("SELECT * FROM admin");
    					$row = mysql_fetch_array($result); 
    					echo $row['email'];
    				?>
				</div>
				<div class="graph">
					<img src="../images/graph.png">
				</div>

				<?php
					if($k == 0)
						include('select.php');
					else
						include('unselect.php');
				?>

				<div class="settings">
					<a href="#">
						<img src="../images/set.png">
						<div class="text_a">прочие настройки</div>
					</a>
				</div>

			</div>
		</div>
		<?php
			if($k == 0)
				include('home.php');
			elseif($k == 1){
				include('redaction.php');
			}
			else{
				include('redaction_page.php');
			}
		?>
		

	</div>
</body>
</html>