<?php
	// ct = custom theme

	// block-quote block
	function ct_block_quote_block() {

		// check function exists
		if( function_exists('ct_block_quote_block') ) {

			// register a acf gutenberg block
			acf_register_block(array(
				'name'				=> 'block-quote',
				'title'				=> __('Block Quote'),
				'description'		=> __('Allows you to add a block quote section.'),
				'render_template'	=> 'acf-block-templates/block-quote.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-quote',
				'keywords'			=> array( 'block-quote' ),
			));
		}
	}

	add_action('acf/init', 'ct_block_quote_block');
