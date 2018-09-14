$('.vis_img').click(function(){
	var element = document.getElementsByClassName('hid')[0];
			
	if(element.style.display == 'none')
		$('.hid').show();
	else
		$('.hid').hide();
});

window.onscroll = function() {
	posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
	var height = document.body.offsetHeight;
	var t = document.documentElement.clientHeight;
	t = (t*76)/100;
	
	height = height - (t+200);
	posTop = Math.ceil(posTop*100/height);
	if(posTop > 100){posTop = 100;}

	document.getElementById('txt').innerHTML = posTop+'%';
}

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
		$(f).animate({left:-1800}, 500);
	});
});

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
		$(".full").animate({left:rotate}, "normal");
	}
	else
		$(".full").animate({left:-rotate}, "normal");
	current_slide = el;
});

function auto_rotating(){
	var max_slide = "<?=$max_slide?>";
	function sec(){
		if(max_slide == current_slide){
			$(".full").animate({left:0}, "normal");
			current_slide = 0;
			$('.circle').removeClass("active");
			$('#1').addClass("active");
		}
		else{
			var st = document.getElementsByClassName('slide')[0].offsetWidth;
			var r = current_slide*st;
			$(".full").animate({left:-r}, "normal");
			current_slide++;
			var cl = "#"+current_slide;
			$('.circle').removeClass("active");
			$(cl).addClass("active");
		}
	}

	setInterval(sec,5000);
    };
		
	setTimeout(auto_rotating, 1000);
});

$(document).ready(function(){
	$("#nav li").on("click","a", function (event) {
	    var id  = $(this).attr('href');
	    var	top = $(id).offset().top;
	    $('body,html').animate({scrollTop: top},2500);
	});
});
		