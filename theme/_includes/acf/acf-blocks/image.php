<?php
	// ct = custom theme

	// image block
	function ct_image_block() {

		// check function exists
		if( function_exists('ct_image_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'image',
				'title'				=> __('Image'),
				'description'		=> __('Allows you to add a image section.'),
				'render_template'	=> 'acf-block-templates/image.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-image',
				'keywords'			=> array( 'image' ),
			));
		}
	}

	add_action('acf/init', 'ct_image_block');
