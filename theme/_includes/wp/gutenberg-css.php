<?php

/*function gutenberg_editor_css(){

	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
	add_editor_style( 'style-editor.css' ); // tries to include style-editor.css directly from your theme folder

}

add_action( 'after_setup_theme', 'gutenberg_editor_css' );*/


function my_admin_style() {
	wp_enqueue_style(
		'my-admin-styles',
		get_template_directory_uri() . '/style-editor.css'
	);
}
add_action('admin_enqueue_scripts', 'my_admin_style');