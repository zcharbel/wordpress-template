<?php

// Advanced Custom Field Options
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'	=> 'General Information',
		'menu_title'	=> 'General Information',
		'menu_slug' 	=> 'general_information',
		'capability'	=> 'edit_pages',
		'redirect'		=> false
	));
	
		acf_add_options_sub_page([
			'page_title' 	=> 'GPDR Info',
			'menu_title' 	=> 'GPDR Info',
			'parent_slug'	=> 'general_information',
		]);
		
		acf_add_options_sub_page([
			'page_title' 	=> 'Company Info',
			'menu_title' 	=> 'Company Info',
			'parent_slug'	=> 'general_information',
		]);
		
		acf_add_options_sub_page([
			'page_title' 	=> 'Google Analytics',
			'menu_title' 	=> 'Google Analytics',
			'parent_slug'	=> 'general_information',
		]);

}