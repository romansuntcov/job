<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script>

</head>
<body>
	<?php
		include ('config.php');
	?> 
	<div id="admin">
		<div class="login" >
			<div class="content_log">
				<div class="log_logo">
					<img src="images/logo_ad.png">
				</div>
				<div class="welcome">
					добро пожаловать в систему управления<br>вашим сайтом!
				</div>
				<div class="info">
					Здравствуйте уважаемый клиент! Вы находитесь в уникальной<br>системе управления, разработанной специально под Ваши задачи<br> и потребности. Для начала работы введите данные, которые<br>передал Вам менеджер проекта.
				</div>
			</div>

			<form action="admin/authorize.php" method="post">
     			<input type="text" pattern="[a-zA-Z0-9]+" name="user_name" value="Введите имя"onfocus="if (this.value == 'Введите имя') {this.value=''}" onblur="if (this.value == '') {this.value='Введите имя'}"/>
    			<input type="text" pattern="[a-zA-Z0-9]+" name="user_pass" value="Введите пароль" onfocus="if (this.value == 'Введите пароль') {this.value=''}" onblur="if (this.value == '') {this.value='Введите пароль'}"/>
    			<input type="image" name="Submit" src="images/enter.png">
 			</form>

		</div>

		<div class="made_by">
			MADE BY <font color="#5ec0cd">HANDCO DESIGN</font> & <font color="#cd5e88">HANDCO CODE</font>
		</div>
		
	</div>		
</body>
</html>