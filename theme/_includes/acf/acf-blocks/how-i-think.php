<?php

	// how I think block
	function ct_how_i_think_block() {

		// check function exists
		if( function_exists('ct_how_i_think_block') ) {
			
			// ct = custom theme
			global $ctName;
			
			$blockName = 'How I Think';
			$blockNameLC = strtolower($blockName);
			$blockSlug = preg_replace('/\s+/', '-', $blockNameLC);
			$icon = 'format-gallery';
			
			// register a portfolio item block
			acf_register_block_type(array(
				'name'				=> $blockNameLC,
				'title'				=> __($blockName),
				'description'		=> __('Allows you to add a ' . $blockNameLC . ' block.'),
				'render_template'	=> 'acf-block-templates/' . $blockSlug . '.php',
				'category'			=> $ctName,
				'icon'				=> $icon,
				'keywords'			=> array( $blockNameLC ),
			));
			
		}
	}

	add_action('acf/init', 'ct_how_i_think_block');
