<?php
// ct = custom theme

// video block
function ct_video_block() {

	// check function exists
	if( function_exists('ct_video_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'video',
			'title'				=> __('Video'),
			'description'		=> __('Allows you to add a video to your page.'),
			'render_template'	=> 'acf-block-templates/video.php',
			'category'			=> 'ct-theme',
			'icon'				=> 'video-alt3',
			'keywords'			=> array( 'video' ),
		));
	}
}

add_action('acf/init', 'ct_video_block');
