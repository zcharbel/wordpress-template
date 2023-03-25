<?php
	// ct = custom theme

	// google-map block
	function ct_google_map_block() {

		// check function exists
		if( function_exists('ct_google_map_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'google-map',
				'title'				=> __('Google Map'),
				'description'		=> __('Allows you to add a google-map section.'),
				'render_template'	=> 'acf-block-templates/google-map.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'google',
				'keywords'			=> array( 'google-map' ),
			));
		}
	}

	add_action('acf/init', 'ct_google_map_block');
