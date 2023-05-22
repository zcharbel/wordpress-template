<?php
	// ct = custom theme

	// content block
	function ct_content_block() {

		// check function exists
		if( function_exists('ct_content_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'content',
				'title'				=> __('Content'),
				'description'		=> __('Allows you to add a content section.'),
				'render_template'	=> 'acf-block-templates/content.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'align-left',
				'keywords'			=> array( 'content' ),
			));
		}
	}

	add_action('acf/init', 'ct_content_block');
