<?php get_header(); ?>

	<?php global $post; ?>
	
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>
	
	<div class="main" style="background: url(<?php echo $src[0]; ?> ) 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container">
				
			<?php get_sidebar(); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<?php if( in_array( 'Intro Box?', get_field('intro_box') ) ){ ?>
				
				<section class="intro-box">
				
				<h1 class="page-title"><?php the_title(); ?></h1>
				
				<h2><?php the_field('intro_text'); ?></h2>
				
				</section>
				    
				<?php } ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php if( in_array( 'Intro Box?', get_field('intro_box') ) ){ } else {?>
						<h1 class="page-title"><?php the_title(); ?></h1>
					<?php } ?>		
						
					<section class="entry">
						<?php the_content(); ?>
					</section>
						
				</article>
			
			<?php endwhile; else : endif; ?>
			
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>