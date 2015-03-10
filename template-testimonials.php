<?php /* Template Name: Testimonials */ get_header(); ?>

	<?php global $post; ?>
	
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>
	
	<div class="main" style="background: url(<?php echo $src[0]; ?> ) 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container testimonials">
				
			<?php get_sidebar(); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h1 class="page-title"><?php the_title(); ?></h1>
					
					<div class="testimonials-list">
				
					<?php 
					// WP_Query arguments
					$args = array (
						'post_type'              => 'testimonial',
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
					?>
						<div class="testimonial">
							<?php the_content(); ?>
							<p class="author"><?php the_title(); ?></p>
						</div>
							
					<?php
						}
					} else {
						// no posts found
					}
					
					// Restore original Post Data
					wp_reset_postdata();
					?>
					
					</div>
				
				</article>
			
			<?php endwhile; else : endif; ?>
			
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>