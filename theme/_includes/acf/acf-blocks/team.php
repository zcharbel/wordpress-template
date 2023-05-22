<?php
	// ct = custom theme

	// team block
	function ct_team_block() {

		// check function exists
		if( function_exists('ct_team_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'team',
				'title'				=> __('Team'),
				'description'		=> __('Allows you to add a team section.'),
				'render_template'	=> 'acf-block-templates/team.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'admin-users',
				'keywords'			=> array( 'team' ),
			));
		}
	}

	add_action('acf/init', 'ct_team_block');
