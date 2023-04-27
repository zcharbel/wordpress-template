<?php

if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( [
			'main' => 'Main Menu',
			'footer' => 'Footer Menu',
			'social-media' => 'Social Media Menu'
		] );
	}
endif; // theme_setup
add_action( 'after_setup_theme', 'theme_setup' );