<?php 

function supersimple_stuff(){
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'haywire-fonts', 'https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Merriweather:400,400italic,700,700italic' );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery'), '', true );
	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobilemenu.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'supersimple_stuff');

//Below adds custom menu
add_theme_support( 'menus' );
add_theme_support( 'widgets' );

function createMenus() {
	register_nav_menu( 'haywire-menu', __('Haywire Menu'));
	$args = array(
		'name'          => esc_html__( 'Main Sidebar', 'supersimple' ),
		'id'            => 'rad-sidebar',
		'description'   => 'Widget area for the rad sidebar.',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);
	register_sidebar( $args );
	$args = array(
		'name'          => esc_html__( 'Secondary Sidebar', 'supersimple' ),
		'id'            => 'secondary-sidebar',
		'description'   => 'Widget area for the secondary rad sidebar.',
	);
	register_sidebar( $args );
}
add_action( 'init', 'createMenus' );







function haywire_dash_title_filter( $title ) {
	if( in_the_loop() ) {
		return $title . " FH";
	} else {
		return $title;
	}
}

add_filter('the_title', 'haywire_dash_title_filter', 999);







if ( ! function_exists( 'custom_taxonomy' ) ) {

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Year of Induction', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Year', 'text_domain' ),
		'all_items'                  => __( 'All Years', 'text_domain' ),
		'parent_item'                => __( 'Parent Year', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Year:', 'text_domain' ),
		'new_item_name'              => __( 'New Year', 'text_domain' ),
		'add_new_item'               => __( 'Add New Year', 'text_domain' ),
		'edit_item'                  => __( 'Edit Year', 'text_domain' ),
		'update_item'                => __( 'Update Year', 'text_domain' ),
		'view_item'                  => __( 'View Year', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate years with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove years', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used years', 'text_domain' ),
		'popular_items'              => __( 'Popular years', 'text_domain' ),
		'search_items'               => __( 'Search years', 'text_domain' ),
		'not_found'                  => __( 'Year Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No years', 'text_domain' ),
		'items_list'                 => __( 'Years list', 'text_domain' ),
		'items_list_navigation'      => __( 'Years list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'year', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

}



if ( ! function_exists( 'custom_taxonomy_bus' ) ) {

// Register Custom Taxonomy
function custom_taxonomy_bus() {

	$labels = array(
		'name'                       => _x( 'Associated Businesses', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Business', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Business', 'text_domain' ),
		'all_items'                  => __( 'All Businesses', 'text_domain' ),
		'parent_item'                => __( 'Parent Business', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Business:', 'text_domain' ),
		'new_item_name'              => __( 'New Business', 'text_domain' ),
		'add_new_item'               => __( 'Add New Business', 'text_domain' ),
		'edit_item'                  => __( 'Edit Business', 'text_domain' ),
		'update_item'                => __( 'Update Business', 'text_domain' ),
		'view_item'                  => __( 'View Business', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Businesses with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Businesses', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Businesses', 'text_domain' ),
		'popular_items'              => __( 'Popular Businesses', 'text_domain' ),
		'search_items'               => __( 'Search Businesses', 'text_domain' ),
		'not_found'                  => __( 'Business Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Businesses', 'text_domain' ),
		'items_list'                 => __( 'Businesses list', 'text_domain' ),
		'items_list_navigation'      => __( 'Businesses list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'businesses', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy_bus', 0 );

}