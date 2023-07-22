<?php
    //Gọi css và javascript vào themes
function mythemes_enqueue_style() {
    wp_enqueue_style( 'bootstrap-min-css', THEME_URI.'/assest/css/bootstrap.min.css', false );
    wp_enqueue_style( 'all-min-css', THEME_URI.'/assest/css/all.min.css', false );
    wp_enqueue_style( 'docs-theme-min-css', THEME_URI.'/assest/css/docs.theme.min.css', false );
    wp_enqueue_style( 'owl-carousel-min-css', THEME_URI.'/assest/css/owl.carousel.min.css', false );
    wp_enqueue_style( 'owl-theme-default-min-css', THEME_URI.'/assest/css/owl.theme.default.min.css', false );
    wp_enqueue_style( 'layout-css', THEME_URI.'/assest/css/layout.css', false );
}
 
function mythemes_enqueue_script() {
    wp_enqueue_script( 'jquery-min-js', THEME_URI.'/assest/js/jquery-3.6.0.min.js', false );
    wp_enqueue_script( 'bootstrap-bundle-min-js', THEME_URI.'/assest/js/bootstrap.bundle.min.js', false );
    wp_enqueue_script( 'owl-carousel-min-js', THEME_URI.'/assest/js/owl.carousel.min.js', false );
 }
 
add_action( 'wp_enqueue_scripts', 'mythemes_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'mythemes_enqueue_script' );

?>


