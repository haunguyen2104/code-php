<?php
// Register Navigation Menus
function mytheme_custom_navigation_menus() {

	$locations = array(
		'main-menu' => __( 'Main Menu', 'nguyen-trung-hau-themes' ),
		'top-menu' => __( 'Top Menu', 'nguyen-trung-hau-themes' ),
		'footer-menu' => __( 'Footer Menu', 'nguyen-trung-hau-themes' ),
		'right-menu' => __( 'Right Menu', 'nguyen-trung-hau-themes' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'mytheme_custom_navigation_menus' );
?>