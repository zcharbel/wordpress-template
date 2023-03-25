<?php
	// ct = custom theme

	// work block
	function ct_work_block() {

		// check function exists
		if( function_exists('ct_work_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'work',
				'title'				=> __('work'),
				'description'		=> __('Allows you to add a work section.'),
				'render_template'	=> 'acf-block-templates/work.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-aside',
				'keywords'			=> array( 'work' ),
			));
		}
	}

	add_action('acf/init', 'ct_work_block');
