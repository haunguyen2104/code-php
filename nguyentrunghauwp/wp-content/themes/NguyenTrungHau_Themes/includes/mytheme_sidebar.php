<?php
// Register Sidebars
function mythem_custom_sidebars() {

	$args = array(
		'id'            => 'main-sidebar',
		'name'          => __( 'Main Sidebar', 'nguyen-trung-hau-themes' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-sidebar',
		'name'          => __( 'Footer Sidebar', 'nguyen-trung-hau-themes' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'slider-sidebar',
		'name'          => __( 'Slider Sidebar', 'nguyen-trung-hau-themes' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'right-sidebar',
		'name'          => __( 'Right Sidebar', 'nguyen-trung-hau-themes' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'mythem_custom_sidebars' );
?>