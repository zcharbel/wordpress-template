<?php
	// ct = custom theme

	// clients block
	function ct_clients_block() {

		// check function exists
		if( function_exists('ct_clients_block') ) {

			// register a portfolio item block
			acf_register_block(array(
				'name'				=> 'clients',
				'title'				=> __('clients'),
				'description'		=> __('Allows you to add a clients section.'),
				'render_template'	=> 'acf-block-templates/clients.php',
				'category'			=> 'ct-theme',
				'icon'				=> 'networking',
				'keywords'			=> array( 'clients' ),
			));
		}
	}

	add_action('acf/init', 'ct_clients_block');
