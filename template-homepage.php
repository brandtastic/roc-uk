<?php /* Template Name: Homepage */ get_header(); ?>

	<div id="slider">
		<?php if(get_field('homepage_slider')) : ?>
			<ul id="home-slider">
			<?php while(the_repeater_field('homepage_slider')) : ?>
				<li style="background-image: url('<?php the_sub_field('image'); ?>');">
					<div class="container">
						<div class="slide-desc">
							<h2><?php the_sub_field('title'); ?></h2>
							<p><?php the_sub_field('text'); ?></p>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	
	<div class="signposts">
		<ul class="container">
			<li><a href="<?php bloginfo('url'); ?>/residential-buy-to-let">Residential<br>Buy To Let</a></li>
			<li><a href="<?php bloginfo('url'); ?>/student-accommodation">Student Accommodation</a></li>
			<li><a href="<?php bloginfo('url'); ?>/asset-management">Asset<br>Management</a></li>
			<div class="fix"></div>
		</ul>
	</div>
	
	<div class="intro-text">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
	
	<div class="container">
				
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							

				
		</article>
		
		<?php endwhile; else : endif; ?>
		
		<div class="fix"></div>
			
	</div>
	
<?php get_footer(); ?>
