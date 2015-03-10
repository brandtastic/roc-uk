<aside id="sidebar" class="no-mobile">
    <?php
		if($post->post_parent)
		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			else
			$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			if ($children) { ?>
				<ul class="sidebar-nav">
					<?php echo $children; ?>
				</ul>
	<?php } ?>
	
	<?php 
	// WP_Query arguments
	$args = array (
		'post_type'              => 'testimonial',
		'posts_per_page'         => '1',
		'orderby'         => 'rand',
	);
	
	// The Query
	$query = new WP_Query( $args );
	
	// The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
	?>
		<div class="testimonial">
			<h3>What our clients say...</h3>
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
</aside>


<!-- MOBILE -->
<section id="mob-subnav" class="mobile-only">
	<ul>
        <li class="mob-dropdown"><a href="#"><span><?php the_title(); ?></span></a>
            <?php
				if($post->post_parent)
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
					else
					$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
					if ($children) { ?>
						<ul>
							<?php echo $children; ?>
						</ul>
			<?php } ?>
        </li>
    </ul>
</section>