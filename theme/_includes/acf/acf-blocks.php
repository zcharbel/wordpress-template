<?php
	// Adds in custom ACF Blocks
	// for use in this custom theme
	
	$dir = get_template_directory() . '/_includes/acf/acf-blocks';
	$files = array_diff(scandir($dir), array('..', '.'));
	
	foreach ($files as &$file) {
		require get_template_directory().'/_includes/acf/acf-blocks/'.$file;
	}
