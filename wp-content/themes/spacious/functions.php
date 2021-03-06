<?php
/**
 * Spacious functions related to defining constants, adding files and WordPress core functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

//ET: add some extra string for multilanguage support
if ( function_exists('pll_register_string') ) {
   pll_register_string("SLIDER_TITLE_1" , "Slider Title 1", "Slider");
   pll_register_string("SLIDER_TEXT_1"  , "Slider Text 1", "Slider");
   pll_register_string("SLIDER_BUTTON_1", "Slider Button 1", "Slider");
   pll_register_string("SLIDER_LINK_1", "Slider Link 1", "Slider");

   pll_register_string("SLIDER_TITLE_2" , "Slider Title 2", "Slider");
   pll_register_string("SLIDER_TEXT_2"  , "Slider Text 2", "Slider");
   pll_register_string("SLIDER_BUTTON_2", "Slider Button 2", "Slider");
   pll_register_string("SLIDER_LINK_2", "Slider Link 2", "Slider");

   pll_register_string("SLIDER_TITLE_3" , "Slider Title 3", "Slider");
   pll_register_string("SLIDER_TEXT_3"  , "Slider Text 3", "Slider");
   pll_register_string("SLIDER_BUTTON_3", "Slider Button 3", "Slider");
   pll_register_string("SLIDER_LINK_3", "Slider Link 3", "Slider");

   pll_register_string("SLIDER_TITLE_4" , "Slider Title 4", "Slider");
   pll_register_string("SLIDER_TEXT_4"  , "Slider Text 4", "Slider");
   pll_register_string("SLIDER_BUTTON_4", "Slider Button 4", "Slider");
   pll_register_string("SLIDER_LINK_4", "Slider Link 4", "Slider");

   pll_register_string("SLIDER_TITLE_5" , "Slider Title 5", "Slider");
   pll_register_string("SLIDER_TEXT_5"  , "Slider Text 5", "Slider");
   pll_register_string("SLIDER_BUTTON_5", "Slider Button 5", "Slider");
   pll_register_string("SLIDER_LINK_5", "Slider Link 5", "Slider");
}

if ( ! isset( $content_width ) )
	$content_width = 750;

/**
 * $content_width global variable adjustment as per layout option.
 */
function spacious_content_width() {
   global $post;
   global $content_width;

   if( $post ) { $layout_meta = get_post_meta( $post->ID, 'spacious_page_layout', true ); }
   if( empty( $layout_meta ) || is_archive() || is_search() ) { $layout_meta = 'default_layout'; }
   $spacious_default_layout = spacious_options( 'default_layout', 'right_sidebar' );

   if ( $layout_meta == 'default_layout' ) {
      if ( ( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'box_978px' ) || ( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'wide_978px' ) ) {
         if ( $spacious_default_layout == 'no_sidebar_full_width' ) { $content_width = 978; /* pixels */ }
         else { $content_width = 642; /* pixels */ }
      }
      elseif ( $spacious_default_layout == 'no_sidebar_full_width' ) { $content_width = 1218; /* pixels */ }
      else { $content_width = 750; /* pixels */ }
   }
   elseif ( ( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'box_978px' ) || ( spacious_options( 'spacious_site_layout', 'box_1218px' ) == 'wide_978px' ) ) {
      if ( $layout_meta == 'no_sidebar_full_width' ) { $content_width = 978; /* pixels */ }
      else { $content_width = 642; /* pixels */ }
   }
   elseif ( $layout_meta == 'no_sidebar_full_width' ) { $content_width = 1218; /* pixels */ }
   else { $content_width = 750; /* pixels */ }
}
add_action( 'template_redirect', 'spacious_content_width' );

add_action( 'after_setup_theme', 'spacious_setup' );
/**
 * All setup functionalities.
 *
 * @since 1.0
 */
if( !function_exists( 'spacious_setup' ) ) :
function spacious_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'spacious', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
	add_theme_support( 'post-thumbnails' );

   // Supporting title tag via add_theme_support (since WordPress 4.1)
   add_theme_support( 'title-tag' );

	// Registering navigation menus.
	register_nav_menus( array(
		'primary' 	=> __( 'Primary Menu','spacious' ),
		'footer' 	=> __( 'Footer Menu','spacious' )
	) );

	// Cropping the images to different sizes to be used in the theme
	add_image_size( 'featured-blog-large', 750, 350, true );
	add_image_size( 'featured-blog-medium', 270, 270, true );
	add_image_size( 'featured', 642, 300, true );
	add_image_size( 'featured-blog-medium-small', 230, 230, true );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'spacious_custom_background_args', array(
		'default-color' => 'eaeaea'
	) ) );

	// Adding excerpt option box for pages as well
	add_post_type_support( 'page', 'excerpt' );

   /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
   add_theme_support('html5', array(
       'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
   ));
}
endif;

/**
 * Define Directory Location Constants
 */
define( 'SPACIOUS_PARENT_DIR', get_template_directory() );
define( 'SPACIOUS_CHILD_DIR', get_stylesheet_directory() );

define( 'SPACIOUS_INCLUDES_DIR', SPACIOUS_PARENT_DIR. '/inc' );
define( 'SPACIOUS_CSS_DIR', SPACIOUS_PARENT_DIR . '/css' );
define( 'SPACIOUS_JS_DIR', SPACIOUS_PARENT_DIR . '/js' );
define( 'SPACIOUS_LANGUAGES_DIR', SPACIOUS_PARENT_DIR . '/languages' );

define( 'SPACIOUS_ADMIN_DIR', SPACIOUS_INCLUDES_DIR . '/admin' );
define( 'SPACIOUS_WIDGETS_DIR', SPACIOUS_INCLUDES_DIR . '/widgets' );

define( 'SPACIOUS_ADMIN_IMAGES_DIR', SPACIOUS_ADMIN_DIR . '/images' );
define( 'SPACIOUS_ADMIN_CSS_DIR', SPACIOUS_ADMIN_DIR . '/css' );


/**
 * Define URL Location Constants
 */
define( 'SPACIOUS_PARENT_URL', get_template_directory_uri() );
define( 'SPACIOUS_CHILD_URL', get_stylesheet_directory_uri() );

define( 'SPACIOUS_INCLUDES_URL', SPACIOUS_PARENT_URL. '/inc' );
define( 'SPACIOUS_CSS_URL', SPACIOUS_PARENT_URL . '/css' );
define( 'SPACIOUS_JS_URL', SPACIOUS_PARENT_URL . '/js' );
define( 'SPACIOUS_LANGUAGES_URL', SPACIOUS_PARENT_URL . '/languages' );

define( 'SPACIOUS_ADMIN_URL', SPACIOUS_INCLUDES_URL . '/admin' );
define( 'SPACIOUS_WIDGETS_URL', SPACIOUS_INCLUDES_URL . '/widgets' );

define( 'SPACIOUS_ADMIN_IMAGES_URL', SPACIOUS_ADMIN_URL . '/images' );
define( 'SPACIOUS_ADMIN_CSS_URL', SPACIOUS_ADMIN_URL . '/css' );

/** Load functions */
require_once( SPACIOUS_INCLUDES_DIR . '/custom-header.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/functions.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/customizer.php' );
require_once( SPACIOUS_INCLUDES_DIR . '/header-functions.php' );

require_once( SPACIOUS_ADMIN_DIR . '/meta-boxes.php' );

/** Load Widgets and Widgetized Area */
require_once( SPACIOUS_WIDGETS_DIR . '/widgets.php' );

/*
 * Adding Admin Menu for theme options
 */
add_action( 'admin_menu', 'spacious_theme_options_menu' );
function spacious_theme_options_menu() {
   add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'spacious-theme-options', 'spacious_theme_options' );
}

function spacious_theme_options() {
   if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.', 'spacious' ) );
   } ?>
   <h1 class="spacious-theme-options"><?php _e( 'Theme Options', 'spacious' ); ?></h1>
   <?php
   printf( __('<p style="font-size: 16px; max-width: 800px";>As our themes are hosted on WordPress repository, we need to follow the WordPress theme guidelines and as per the new guiedlines we have migrated all our Theme Options to Customizer.</p><p style="font-size: 16px; max-width: 800px";>We too think this is a better move in the long run. All the options are unchanged, it is just that they are moved to customizer. So, please use this <a href="%1$s">link</a> to customize your site. If you have any issues then do let us know via our <a href="%2$s">Contact form</a></p>', 'spacious'),
      esc_url(admin_url( 'customize.php' ) ),
      esc_url('http://themegrill.com/contact/')
   );
}
/**
 * Returns the permalink for a page based on the incoming slug.
 *
 * @param   string  $slug   The slug of the page to which we're going to link.
 * @return  string          The permalink of the page
 * @since   1.0

 */
function get_wp_slug_id( $slug ) {
        return get_page_by_path( $slug )->ID;
}
function get_wp_slug_url( $slug ) {
    return get_permalink(get_page_by_path( $slug ) );
}
function get_wp_slug_page( $slug ) {
	return get_permalink(get_page_by_path( $slug ));
}

function get_translated_page( $slug, $language ) {
    return get_page_link(pll_get_post(get_wp_slug_id($slug), $language));
}

?>
