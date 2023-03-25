<?php
	// ct = custom theme

	// resources block
	function ct_resources_block() {

		// check function exists
		if( function_exists('ct_resources_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'resources',
				'title'				=> __('Resources'),
				'description'		=> __('Allows you to add a resources section.'),
				'render_template'	=> 'acf-block-templates/resources.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'media-document',
				'keywords'			=> array( 'resources' ),
			));
		}
	}

	add_action('acf/init', 'ct_resources_block');
