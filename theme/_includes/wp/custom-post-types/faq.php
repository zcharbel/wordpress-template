<?php 
//////////////////////
// FAQs Custom Post type
//////////////////////

global $frameworkName;
$cptName = 'FAQ';

// CPT Supports
$cptSupports = array( 'title', 'editor', 'thumbnail' );

// CPT Menu Icon
$menuIcon = 'dashicons-excerpt-view';

require get_template_directory() . '/_includes/wp/custom-post-types/_cpt-template.php';

register_post_type( $cptSlug . '-cpt', $cptTemplateArgs );