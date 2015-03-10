<?php /* Template Name: FAQ */ get_header(); ?>

	<?php global $post; ?>
	
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>
	
	<div class="main" style="background: url(<?php echo $src[0]; ?> ) 0 0 no-repeat; background-size: 100% auto;">
	
		<div class="container">
				
			<?php get_sidebar(); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h1 class="page-title"><?php the_title(); ?></h1>
					
					<?php if(get_field('frequently_asked_questions')) : ?>
                            	
                    	<section class="faq">
							
							<?php while(the_repeater_field('frequently_asked_questions')) : ?>
                        
                            	<section class="question">
                        
                                	<a href="#" class="question-trigger">
                                        <h2><strong>Q.</strong> <?php the_sub_field('question'); ?></h2>
                                    </a>
                        
                                    <section class="answer">
                                        <h2>A.</h2> <p><?php the_sub_field('answer'); ?></p>
                                        <div class="fix"></div>
                                    </section>
                        
                                </section>
                        
                            <?php endwhile; ?>
                        
                        </section>
                    
                    <?php endif; ?>
                    
                    <script type="text/javascript">
	                	jQuery('.question-trigger').click(function(e) {
							if (jQuery(this).hasClass('active')) {
								jQuery('.active-answer').slideUp().removeClass('active-answer');
								jQuery(this).removeClass('active');
								e.preventDefault();	
							} else {
								jQuery('.active-answer').slideUp().removeClass('active-answer');
								jQuery('.active').removeClass('active');
								jQuery(this).addClass('active');
								jQuery(this).next('.answer').slideDown().addClass('active-answer');
								e.preventDefault();
							}
						});
	                </script>
						
				</article>
			
			<?php endwhile; else : endif; ?>
			
			<div class="fix"></div>
		
		</div>
			
	</div>
	
<?php get_footer(); ?>