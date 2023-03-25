<?php
	// ct = custom theme

	// faq block
	function ct_faq_block() {

		// check function exists
		if( function_exists('ct_faq_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'faq',
				'title'				=> __('FAQ'),
				'description'		=> __('Allows you to add a faq section.'),
				'render_template'	=> 'acf-block-templates/faq.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'excerpt-view',
				'keywords'			=> array( 'faq' ),
			));
		}
	}

	add_action('acf/init', 'ct_faq_block');
