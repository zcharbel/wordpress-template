<?php

	// blog block
	function ct_blog_block() {

		// check function exists
		if( function_exists('ct_blog_block') ) {
			
			// ct = custom theme
			global $ctName;
			
			$blockName = 'Blog';
			$blockNameLC = strtolower($blockName);
			$blockSlug = preg_replace('/\s+/', '-', $blockNameLC);
			$icon = 'columns';
			
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

	add_action('acf/init', 'ct_blog_block');
