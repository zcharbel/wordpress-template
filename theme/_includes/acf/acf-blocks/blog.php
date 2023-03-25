<?php
	// ct = custom theme

	// blog block
	function ct_blog_block() {

		// check function exists
		if( function_exists('ct_blog_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'blog',
				'title'				=> __('Blog'),
				'description'		=> __('Allows you to add a blog section.'),
				'render_template'	=> 'acf-block-templates/blog.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-aside',
				'keywords'			=> array( 'blog' ),
			));
		}
	}

	add_action('acf/init', 'ct_blog_block');
