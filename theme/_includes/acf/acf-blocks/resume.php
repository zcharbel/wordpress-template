<?php
	// ct = custom theme

	// resume block
	function ct_resume_block() {

		// check function exists
		if( function_exists('ct_resume_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'resume',
				'title'				=> __('resume'),
				'description'		=> __('Allows you to add a resume section.'),
				'render_template'	=> 'acf-block-templates/resume.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'format-aside',
				'keywords'			=> array( 'resume' ),
			));
		}
	}

	add_action('acf/init', 'ct_resume_block');
