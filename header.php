<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/modernizr-latest.js" type="text/javascript"></script>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width"/>  
<?php get_template_part('includes/build', 'meta'); ?>
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/css/skdslider.css" rel="stylesheet">
<?php wp_head(); ?>
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
