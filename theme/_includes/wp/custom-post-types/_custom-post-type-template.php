<?php 

global $frameworkName;

// CPT Individual Name 
$cptName = 'CPT Name Goes Here';

// CPT Supports
$cptSupports = array( 'title', 'editor', 'thumbnail' );

// CPT Menu Icon
$menuIcon = 'dashicons-admin-users';

require get_template_directory() . '/_includes/wp/custom-post-types/_cpt-template.php';

register_post_type( $cptSlug . '-cpt', $cptTemplateArgs );
