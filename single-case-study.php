<?php get_header(); ?>
	
	<div class="main" style="background: url('<?php bloginfo('template_directory'); ?>/images/slides/slide1.jpg') 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container">
				
			<?php get_sidebar(); ?>
						
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php the_post_thumbnail(); ?>
					
					<div class="post-meta">
						<ul class="sharers">
							<li><a href="#" title="" class="fb">Share <i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="" class="twitter">Tweet <i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="" class="google">Plus <i class="fa fa-google-plus"></i></a></li>
						</ul>
						
						<p><strong>Author:</strong> </p>
						<p><strong>Date:</strong> </p>
						<p><strong>Category:</strong> </p>
					</div>
					
					<section class="entry">
						
						<h1 class="page-title"><?php the_title(); ?></h1>
						
						<?php the_content(); ?>
					
					</section>
						
				</article>
			
			<?php endwhile; else : endif; ?>
						
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>