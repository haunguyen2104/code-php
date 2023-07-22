<?php 
       // Register Sidebars
function custom_sidebars() {

	$args = array(
		'id'            => 'main-sidebar',
		'name'          => __( 'Main Sidebar', 'my-theme' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-sidebar',
		'name'          => __( 'Footer Sidebar', 'my-theme' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars' );
?>