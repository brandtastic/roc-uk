<?php /* Template Name: Homepage */ get_header(); ?>

	<div id="slider" class="skdslider">
		<ul>
			<?php 
				// WP_Query arguments
				$args = array (
					'post_type'              => 'slide',
				);
				
				// The Query
				$query = new WP_Query( $args );
				
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
				?>
					<li><?php the_post_thumbnail('full'); ?>
						<div class="container">
						<div class="slide-desc">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
						</div>
					</li> 
						
				<?php
					}
				} else {
					// no posts found
				}
				
				// Restore original Post Data
				wp_reset_postdata();
			?>
		</ul>
	</div>
	
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#slider').skdslider({
			'delay':5000, // Delay duration between two slides in micro seconds. 
			'fadeSpeed': 2000, // Fading Speed in micro seconds.
			'showNav': false,
			'showNextPrev': true, // It will show/hide navigation icon.
			'animationType': 'sliding', // It will show/hide navigation icon.
			'numericNav': false // If true, navigation will be numeric
			});
		});
	</script>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/skdslider.min.js"></script>
	
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