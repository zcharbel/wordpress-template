<?php

// Advanced Custom Field Options
if( function_exists('acf_add_options_page') ) {

	/*acf_add_options_page(array(
		'page_title'	=> 'General Information',
		'menu_title'	=> 'General Information',
		'menu_slug' 	=> 'general_information',
		'capability'	=> 'edit_pages',
		'redirect'		=> false
	));*/

	acf_add_options_page(array(
		'page_title'	=> 'Google Tag Manager ID',
		'menu_title'	=> 'Google Tag Manager ID',
		'menu_slug' 	=> 'google_tag_manager_id',
		'capability'	=> 'edit_pages',
		'redirect'	=> false
	));
	
	acf_add_options_page(array(
		'page_title'	=> 'GPDR Info',
		'menu_title'	=> 'GDPR Info',
		'menu_slug' 	=> 'gdpr-info',
		'capability'	=> 'edit_pages',
		'redirect'	=> false
	));

	acf_add_options_page(array(
		'page_title'	=> 'Company Info',
		'menu_title'	=> 'Company Info',
		'menu_slug' 	=> 'company-info',
		'capability'	=> 'edit_pages',
		'redirect'	=> false
	));

}