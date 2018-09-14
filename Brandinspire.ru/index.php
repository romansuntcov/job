<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>Brandinspire</title>
	<META NAME="keywords" CONTENT="brandinspire, brand inspire, продвижение дизайнера интерьера, продвижение в сфере дизайна и архитектуры, разработка сайта, разаработка лого, брендинг, продвижение малого бизнеса, продвижение в социальных сетях, маркетинговые услуги для дизайнеров, пиар услуги для дизайнеров, агентство для дизайнеров интерьера">
    <META NAME="description" CONTENT="Brand Inspire креативное агентство интегрированных решений: любая помощь по бренду в одном месте. ">
    <META NAME="viewport" content="width=device-width,initial-scale=1.0">    
	<?php
		include ('config.php');
	?>

	<style>
		@font-face{
			font-family: Ubuntu-Medium;
			src:url(styles/Ubuntu/Ubuntu-Medium.ttf);	
		}
		@font-face{
			font-family: Museo-Medium;
			src:url(styles/Museo/MuseoSansCyrl_1.otf);	
		}
		@font-face{
			font-family: Ubuntu-Light;
			src:url(styles/Ubuntu/Ubuntu-Light.ttf);	
		}
		@font-face{
			font-family: Museo-Light;
			src:url(styles/Museo/MuseoSansCyrl_0.otf);	
		}
		@font-face{
			font-family: Ubuntu-Regular;
			src:url(styles/Ubuntu/Ubuntu-Regular.ttf);	
		}
		@font-face{
			font-family: Museo-Bold;
			src:url(styles/Museo/MuseoSansCyrl_2.otf);	
		}
		@font-face{
			font-family: Museo-MaxBold;
			src:url(styles/Museo/MuseoSansCyrl_3.otf);	
		}	
		
		<?php
		    $result = mysql_query("SELECT * FROM slider");
				while($row = mysql_fetch_array($result)){
				    echo "\n #c".$row['id_slide'].".img_slide { background:url('".$row['image']."') center center; 
				        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                         background-size: cover;
				    }";
				}
		?>
	</style>

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="jquery-3.0.0.min.js" type="text/javascript"></script>

    <script>
        function AjaxFormRequest(result_id,formMain,url) {
            jQuery.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: jQuery("#"+formMain).serialize(),
                success: function(response) {
                document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) {
                    document.getElementById(result_id).innerHTML = "Возникла ошибка при отправке формы. Попробуйте еще раз";
                }
            });
        }
	</script>

</head>
<body>
	<?php
		include ('config.php');
	?> 

	<?php
		if(empty($_GET["project"])){
			$i = 101;	
			echo "<div id=\"page\">";
			include('blocks/header.php');	
			include('blocks/slider.php');
			include('blocks/usp.php');
			include('blocks/about.php');
			include('blocks/what_we_do.php');
			include('blocks/projects.php');	
			include('blocks/clients.php');
			include('blocks/contacts.php');	
			echo "</div>";
		}	
		elseif(($_GET["project"] > 0)){
			$id=($_GET["project"]);
			echo "<div id=\"page\">";
			include('blocks/header_proj.php');
			include('blocks/project.php');
		};		
	?>

	<script type="text/javascript">
		$('.vis').click(function(){
		    event.preventDefault()
			var element = document.getElementsByClassName('hid')[0];
			if(element.style.display == 'none')
				$('.hid').show();
			else
				$('.hid').hide();
		});
	</script>
	
	<script>
	    window.onscroll = function() {
	        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
	        var height = document.body.offsetHeight;
	        var t = document.documentElement.clientHeight;
	        var t = (t*76)/100;
	    	height = height - (t+200);
    	    posTop = Math.ceil(posTop*100/height);
    	    if(posTop > 100){posTop = 100;}
	        document.getElementById('txt').innerHTML = posTop+'%';
	    }
	</script>

    <script type="text/javascript">
	$(function(){
		var f = 0;
		$('.more').on('click',function(){
			var elem = $(this).attr('id');
			elem = parseInt(elem) + 200;
			elem = "#"+elem;
			$(elem).animate({left:0}, 500);
			f = elem;
		});
		$('.close').on('click',function(){
			$(f).animate({left:-4000}, 500);
		});
	});
    </script>
    
    <script type="text/javascript">
	var current_slide = 1;
	$(function(){
		var x = 1;
		$('.circle').on('click', function(){
			$('.circle').removeClass("active");
			$(this).addClass("active");
			var el = $(this).attr('id');
			var st = document.getElementsByClassName('slide')[0].offsetWidth;
			var rotate = (el - x)*st;
			if(rotate < 0){
				$(".full").animate({left:rotate}, "slow");
			}
			else
				$(".full").animate({left:-rotate}, "slow");
			current_slide = el;
		});

		function auto_rotating(){
			var max_slide = "<?=$max_slide?>";
			function sec(){
				if(max_slide == current_slide){
					$(".full").animate({left:0}, "slow");
					current_slide = 0;
					$('.circle').removeClass("active");
					$('#1').addClass("active");
				}
				else{
					var st = document.getElementsByClassName('slide')[0].offsetWidth;
					var r = current_slide*st;
					$(".full").animate({left:-r}, "slow");
					current_slide++;
					var cl = "#"+current_slide;
					$('.circle').removeClass("active");
					$(cl).addClass("active");
				}
			}
			setInterval(sec,5000);
		};
		setTimeout(auto_rotating, 3000);
		});
    </script>

    <script type="text/javascript">
	    $(document).ready(function(){
		    $("#nav li").on("click","a", function (event) {
		    	var id  = $(this).attr('href');
		    	var	top = $(id).offset().top;
		    	$('body,html').animate({scrollTop: top},2500);
		   	});
		});
		
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
		$("#mob li").on("click","a", function (event) {
			showHide("mob");
			var id  = $(this).attr('href');
			var	top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
			});
		});
        function showHide(element_id) {
                if (document.getElementById(element_id)) { 
                    var obj = document.getElementById(element_id);  
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; 
                    }
                    else obj.style.display = "none"; 
                }
                else alert("Элемент с id: " + element_id + " не найден!"); 
            }   
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            var wid=$(window).width();
            if(wid < 1200){
                $(".text_usp").hide();
                $(".title_usp").click(function () {
                    $(this).siblings(".text_usp").slideToggle("fast");
                });
            }
        });
    </script>
</body>
</html>