<?php



/* Enable Post Thumbnails */
add_theme_support( 'post-thumbnails' );

/* Custom Thumbnail Sizes */
add_image_size( 'blog', 600, 400, true ); // 220 pixels wide by 180 pixels tall, hard crop mode

/* Enable Custom Menus */
add_theme_support( 'menus' );

/* Add WooCommerce Support */
add_theme_support( 'woocommerce' );


/* Custom Menus */
function custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Main Nav' ),
            'secondary-menu' => __( 'Secondary Nav' ),
            'mobile-menu' => __( 'Mobile Nav' ),
            'footer-menu' => __( 'Footer Nav' )
        )
    );
}
add_action( 'init', 'custom_menus' );



/* Add Secondary Class */
function add_body_class( $classes ) {
	
	if ( is_front_page()){
		
		$classes[] = 'homepage';	
	
		return $classes;
	
	} else {
		
		$classes[] = 'secondary';	
	
		return $classes;
		
	}
}
add_filter( 'body_class', 'add_body_class' );


function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );



/* Register Widget-Ready Sidebars */
function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Left Sidebar' ),
		'id' => 'left-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'wpb_widgets_init' );



add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Residential Buy To Let",
		"singular_name" => "Residential Buy To Let",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "residential", "with_front" => true ),
		"query_var" => true,
				"menu_icon" => "dashicons-admin-home",				"taxonomies" => array( "category", "post_tag" )	);
	register_post_type( "residential", $args );

	$labels = array(
		"name" => "Student Accommodation",
		"singular_name" => "Student Accommodation",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "student", "with_front" => true ),
		"query_var" => true,
				"menu_icon" => "dashicons-universal-access",				"taxonomies" => array( "category", "post_tag" )	);
	register_post_type( "student", $args );

	$labels = array(
		"name" => "Asset Management",
		"singular_name" => "Asset Management",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "asset", "with_front" => true ),
		"query_var" => true,
				"menu_icon" => "dashicons-post-status",				"taxonomies" => array( "category", "post_tag" )	);
	register_post_type( "asset", $args );

	$labels = array(
		"name" => "Testimonials",
		"singular_name" => "Testimonial",
		"menu_name" => "Testimonials",
		"all_items" => "All Testimonials",
		"add_new" => "Add Testimonial",
		"add_new_item" => "Add New Testimonial",
		"edit_item" => "Edit Testimonial",
		"new_item" => "New Testimonial",
		"view_item" => "View Testimonial",
		"search_items" => "Search Testimonial",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonial", "with_front" => true ),
		"query_var" => true,
						"supports" => array( "title", "editor" ),			);
	register_post_type( "testimonial", $args );

// End of cptui_register_my_cpts()
}



// add_filter('show_admin_bar', '__return_false');

	function my_login_logo() { ?>
	    <style type="text/css">
	        body.login div#login h1 a {
	            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/favicons/apple-touch-icon-120x120.png);
				display: block;
				background-size: contain;
	        }
	    </style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	function my_login_logo_url() {
	    return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	// First, create a function that includes the path to your favicon
	function add_favicon() {
	  	$favicon_url = get_stylesheet_directory_uri() . '/images/favicons/favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	}
	  
	// Now, just make sure that function runs when you're on the login page and admin pages  
	add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');

?>
