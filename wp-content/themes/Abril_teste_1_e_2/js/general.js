
	$('.controlMenu').click(function(){
		if(!$('header nav').hasClass('open-menu')){
			$('header nav').removeClass('menu-full').addClass('open-menu').fadeIn();
			$('.bgShadow').fadeIn();
		} else {
			$('header nav').addClass('menu-full').removeClass('open-menu').fadeOut();
			$('.bgShadow').fadeOut();
		}
	});

	$('.bgShadow').click(function(){
		$('header nav').addClass('menu-full').removeClass('open-menu').fadeOut();
		$(this).fadeOut();
	});

	$( document ).ready(function() {
	    
	});