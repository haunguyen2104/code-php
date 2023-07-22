<?php 
    define('THEME_URL',get_template_directory_uri());
    require_once ('includes/enqueue_style_javascript.php');
    require_once ('includes/custom_sidebar.php');
    require_once ('includes/custom_menu.php');
    function register_navwalker(){
      require_once ('includes/class-wp-bootstrap-navwalker.php');
    }
    add_action( 'after_setup_theme', 'register_navwalker' );
    // Một số support
    #Hình đại diện
    // Set content width value based on the theme's design
if ( ! isset( $content_width ) )
$content_width = 600;

// Register Theme Features
function custom_theme_features()  {

// Add theme support for Automatic Feed Links
add_theme_support( 'automatic-feed-links' );

// Add theme support for Post Formats
add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'audio', 'link', 'chat' ) );

// Add theme support for Featured Images
add_theme_support( 'post-thumbnails' );

// Add theme support for Custom Background
$background_args = array(
  'default-color'          => '#f1f1f1',
);
add_theme_support( 'custom-background', $background_args );

// Add theme support for custom CSS in the TinyMCE visual editor
add_editor_style();

$defaults = array(
  'height'               => 100,
  'width'                => 400,
  'flex-height'          => true,
  'flex-width'           => true,
  'header-text'          => array( 'site-title', 'site-description' ),
  'unlink-homepage-logo' => true, 
);

add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_theme_features' );
//hỗ trợ woocommerce
function my_custom_wc_theme_support()
{
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );
