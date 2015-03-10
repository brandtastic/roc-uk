$(document).ready(function() {

	var pull 		= jQuery('#pull');
		menu 		= jQuery('nav ul');
		menuHeight	= menu.height();

	jQuery(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});

	jQuery(window).resize(function(){
		var w = jQuery(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});

	jQuery('#mob-subnav > ul > li:has(ul)').addClass("has-sub");
	jQuery('#mob-subnav > ul > li > a').click(function() {

		var checkElement = jQuery(this).next();

		jQuery('#mob-subnav li').removeClass('active');
		jQuery(this).closest('li').addClass('active');	

		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			jQuery(this).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		}

		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			jQuery('#mob-subnav ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}

		if (checkElement.is('ul')) {
			return false;
		} else {
			return true;	
		}
	});

	$('.container').fitVids();
	$('#home-slider').bxSlider({
		'pager': false
	});
});
