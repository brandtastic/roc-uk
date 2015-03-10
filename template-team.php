<?php /* Template Name: Team Members */ get_header(); ?>

	<?php global $post; ?>
	
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>
	
	<div class="main" style="background: url(<?php echo $src[0]; ?> ) 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container">
				
			<?php get_sidebar(); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h1 class="page-title"><?php the_title(); ?></h1>
					
					<?php if(get_field('team_members')) : ?>
							
							<?php while(the_repeater_field('team_members')) : ?>
								
								<section class="member">
                        
	                            	<img src="<?php the_sub_field('image'); ?>">
	                            	<p class="name"><?php the_sub_field('name'); ?></p>
	                            	<p class="description"><?php the_sub_field('description'); ?></p>
                            	
                            	</section>
                        
                            <?php endwhile; ?>
                    
                    <?php endif; ?>
						
				</article>
			
			<?php endwhile; else : endif; ?>
			
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>