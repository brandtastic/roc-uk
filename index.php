<?php get_header(); ?>
	
	<div class="main" style="background: url('<?php bloginfo('template_directory'); ?>/images/slides/slide1.jpg') 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container">
				
			<?php get_sidebar(); ?>
			
			<div class="posts">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail(); ?>
					
					<section class="entry">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="button read-more">Read More</a>
						<div class="fix"></div>
					</section>
						
				</article>
			
			<?php endwhile; else : endif; ?>
			
			</div>
			
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>