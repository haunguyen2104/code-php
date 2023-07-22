<?php 
        function register_my_menus() {
            register_nav_menus(
              array(
                'mainmenu' => __( 'MainMenu Menu' ),
                'footermenu' => __( 'Footer Menu' ),
                'rightmenu' => 'Right Menu'
              )
            );
          }
          add_action( 'init', 'register_my_menus' );