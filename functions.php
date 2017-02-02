<?php

function my_mce_buttons_2($buttons) {/*** Add in a core button that's disabled by default*/
	$buttons[] = 'sup';$buttons[] = 'sub';return $buttons;}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

/* Start WordPress JUNK REMOVAL */
// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
function kjmjr_remove_clutter(){
	if (!is_admin()){
		wp_deregister_script('wp-embed');
	}
}
add_action('init', 'kjmjr_remove_clutter');

function remove_bodhi_svg_inline(){
	wp_dequeue_script('bodhi_svg_inline');
	wp_deregister_script('bodhi_svg_inline');
}
add_action('wp_enqueue_scripts', 'remove_bodhi_svg_inline');

// Removes Live Composer Scripts Used for Masonry Effect and Videos and Fonts
/* function dequeue_live_composer_junk() {
	wp_dequeue_script('wp-mediaelement');
	wp_dequeue_script('imagesloaded');
	wp_dequeue_script('jquery-masonry');
	wp_dequeue_style( 'dslc-gf-opensans' );
	wp_dequeue_style( 'dslc-gf-roboto-condesed' );
	wp_dequeue_style( 'dslc-font-awesome');
} */
// add_action('wp_enqueue_scripts', 'dequeue_live_composer_junk');

// Remove Open Sans Font
function remove_open_sans_font(){
	wp_deregister_style( 'open-sans' );
	wp_dequeue_style( 'open-sans' );
	wp_deregister_style( 'twentytwelve-fonts' );
	wp_dequeue_style( 'twentytwelve-fonts' );
}

/* End WordPress JUNK REMOVAL */

// Register Navigation Menu
if (function_exists('add_theme_support')){
	add_theme_support('menus');
}
register_nav_menus( array(
	'Main Menu' => 'Main Menu in site Header',
	'Footer Brands' => 'Brands list in site footer',
	'Footer Information' => 'Information list in site footer',
));

// Navigation Class Filters
function add_slug_class_to_menu_item($output){
	$ps = get_option('permalink_structure');
	if(!empty($ps)){
		$idstr = preg_match_all('/<li id="menu-item-(\d+)/', $output, $matches);
		foreach($matches[1] as $mid){
			$id = get_post_meta($mid, '_menu_item_object_id', true);
			$slug = basename(get_permalink($id));
			$output = preg_replace('/menu-item-'.$mid.'">/', 'menu-item-'.$mid.' menu-item-'.$slug.'">', $output, 1);
		}
	}
	return $output;
}
add_filter('wp_nav_menu', 'add_slug_class_to_menu_item');

// Declare WooCommerce Compatible
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Delcare Header/Footer compatibility
define( 'DS_LIVE_COMPOSER_HF', true );
define( 'DS_LIVE_COMPOSER_HF_AUTO', false );

// Content Width ( WP requires it and LC uses is to figure out the wrapper width )
if ( ! isset( $content_width ) )
	$content_width = 1180;

// Basic theme setup
if ( ! function_exists( 'lct_theme_setup' ) ) {

	function lct_theme_setup() {

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Enable Post Thumbnails ( Featured Image )
		add_theme_support( 'post-thumbnails' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form' ) );

	}

} add_action( 'after_setup_theme', 'lct_theme_setup' );

// Load JS and CSS files
function tucker_toys_theme_load_scripts() {
	wp_enqueue_style( 'tucker-toys-stylesheet', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'lightslider-stylesheet', get_template_directory_uri() . '/css/lightslider.min.css' , array(), '1.0' );
	wp_deregister_script('jquery');
	// wp_register_script('jquery', ('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'), true, null);
	wp_register_script('jquery', ('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'), true, null);
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
	wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/js/lightslider.min.js', array('jquery'), null, true);
} add_action( 'wp_enqueue_scripts', 'tucker_toys_theme_load_scripts' );

function kjmjr_add_google_fonts(){
	wp_enqueue_style( 'kjmjr_google_fonts', 'https://fonts.googleapis.com/css?family=Luckiest+Guy' );
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'kjmjr_add_google_fonts');

// Restrict Live Composer Fonts
/*function live_composer_font_restrict(){
	$font_array = array(
		'google' => array( 'Luckiest Guy', 'Roboto', 'Bitter' ),
		'regular' => array( 'Georgia', 'Times', 'Arial', 'Lucida Sans Unicode', 'Tahoma', 'Trebuchet MS', 'Verdana', 'Helvetica' ),
	);
}
add_filter( 'dslc_available_fonts', array( DSLC_Scripts, 'live_composer_font_restrict' )); */
?>
