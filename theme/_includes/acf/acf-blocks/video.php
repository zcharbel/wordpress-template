<?php

// video block
function ct_video_block() {

	// check function exists
	if( function_exists('ct_video_block') ) {
		
		// ct = custom theme
		global $ctName;
		
		$blockName = 'Video';
		$blockNameLC = strtolower($blockName);
		$blockSlug = preg_replace('/\s+/', '-', $blockNameLC);
		$icon = 'video-alt3';
		
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

add_action('acf/init', 'ct_video_block');
