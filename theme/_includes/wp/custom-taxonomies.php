<?php

//create a custom taxonomy name it topics for your posts

function create_custom_taxonomies() {
	//require get_template_directory().'/_includes/wp/custom-taxonomy/taxonomy.php';
}


add_action( 'init', 'create_custom_taxonomies', 0 );