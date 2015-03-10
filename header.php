<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/css/skdslider.css" rel="stylesheet">
<?php wp_head(); ?>
<script type="text/javascript">
	jQuery(function() {
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
	});
</script>
</head>
	
<body <?php body_class(); ?>>

	<!-- mobile-nav -->
	<nav class="mobile-only">
		<?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
		<a href="#" id="pull">Menu</a>
	</nav>
	
	<div class="wrapper">
	
		<!-- site-header -->
		<header class="site-header">
			<div class="container">
			
				<div class="header-left">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="logo"></a>
				</div>
				
				<div class="header-right no-mobile">
					<ul class="header-social">
						<li><a href="" title=""><i class="fa fa-phone"></i> +44 (0) 207 043 5100</a></li>
						<li><a href="" title=""><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="" title=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href="" title=""><i class="fa fa-envelope"></i></a></li>
					</ul>
					
					<a href="#" class="signup">Investment News Sign Up</a>
					
					<!-- main-nav -->
					<nav>
						<?php wp_nav_menu (array('theme_location' => 'primary-menu','menu_class' => 'primary'));?>
						<?php wp_nav_menu (array('theme_location' => 'secondary-menu','menu_class' => 'secondary'));?>
					</nav>
				</div>
				
				<div class="fix"></div>
			</div>
		</header><!-- /site-header -->