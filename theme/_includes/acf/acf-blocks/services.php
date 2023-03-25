<?php
	// ct = custom theme

	// services block
	function ct_services_block() {

		// check function exists
		if( function_exists('ct_services_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'services',
				'title'				=> __('services'),
				'description'		=> __('Allows you to add a services section.'),
				'render_template'	=> 'acf-block-templates/services.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-aside',
				'keywords'			=> array( 'services' ),
			));
		}
	}

	add_action('acf/init', 'ct_services_block');
