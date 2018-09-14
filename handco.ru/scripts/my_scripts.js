
		$(document).ready(function(){
		$("#nav li").on("click","a", function (event) {
			
			var id  = $(this).attr('href');
			var	top = $(id).offset().top-70;
			$('body,html').animate({scrollTop: top}, 1500);
			});
		});
		$(document).ready(function(){
        	var $menu = $("#menu");
        	$(window).scroll(function(){
            	if ( $(this).scrollTop() > 420 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
           		} 
           		else if($(this).scrollTop() <= 420 && $menu.hasClass("fixed")) {
                	$menu.removeClass("fixed").addClass("default");
            	}
        	});
    	});
		$(document).ready(function(){
		$("#mob li").on("click","a", function (event) {
			
			showHide("mob");
			var id  = $(this).attr('href');
			var	top = $(id).offset().top-70;
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
