<?php /* Template Name: Contact */ get_header(); ?>

	<?php global $post; ?>
	
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>
	
	<div class="main" style="background: url(<?php echo $src[0]; ?> ) 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container">
				
			<?php get_sidebar(); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h1 class="page-title"><?php the_title(); ?></h1>
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1241.7260558220107!2d-0.019389999999999994!3d51.504920999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602b77a70e4e1%3A0x611a744a19aa0f43!2sROC+Invest!5e0!3m2!1sen!2suk!4v1425906185044" width="650" height="300" frameborder="0" style="border:0"></iframe>	
						
					<section class="entry">
						<?php the_content(); ?>
					</section>
						
				</article>
			
			<?php endwhile; else : endif; ?>
			
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>