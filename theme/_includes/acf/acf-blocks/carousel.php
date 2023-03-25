<?php
	// ct = custom theme

	// carousel block
	function ct_carousel_block() {

		// check function exists
		if( function_exists('ct_carousel_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'carousel',
				'title'				=> __('Carousel'),
				'description'		=> __('Allows you to add a carousel section.'),
				'render_template'	=> 'acf-block-templates/carousel.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-gallery',
				'keywords'			=> array( 'carousel' ),
			));
		}
	}

	add_action('acf/init', 'ct_carousel_block');
