<?php 
    // Gọi CSS và js vào theme
    function mytheme_enqueue_style() {
        wp_enqueue_style( 'bootstrap-min-css', THEME_URL.'/assets/css/bootstrap.min.css', false );
        wp_enqueue_style( 'all-min-css', THEME_URL.'/assets/css/all.min.css', false );
        wp_enqueue_style( 'layout-css', THEME_URL.'/assets/css/layout.css', false );
    }
     
    function mytheme_enqueue_script() {
        wp_enqueue_script( 'bootstrap-bundle-min', THEME_URL.'/assets/js/bootstrap.bundle.min.js', false );
    }
     
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_script' );
?>