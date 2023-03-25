<?php
	// ct = custom theme

	// accordion block
	function ct_accordion_block() {

		// check function exists
		if( function_exists('ct_accordion_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'accordion',
				'title'				=> __('Accordion'),
				'description'		=> __('Allows you to add a accordion section.'),
				'render_template'	=> 'acf-block-templates/accordion.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'list-view',
				'keywords'			=> array( 'accordion' ),
			));
		}
	}

	add_action('acf/init', 'ct_accordion_block');
