<?php

//create a custom taxonomy name it topics for your posts

function create_custom_taxonomies() {
	//require get_template_directory().'/_includes/wp/custom-taxonomy/team-members.php';
	
	// $frameworkName is set in functions.php file
	global $frameworkName;
	
	$dir    = get_template_directory().'/_includes/wp/custom-taxonomies';
	$files = array_diff(scandir($dir), array('..', '.'));
	
	foreach ($files as &$file) {
		require get_template_directory().'/_includes/wp/custom-taxonomies/'.$file;
	}
	
}


add_action( 'init', 'create_custom_taxonomies', 0 );