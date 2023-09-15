<?php 
////////////////////////////////////////////
// "Role" custom taxonomy (Team Member)
////////////////////////////////////////////
global $frameworkName;
$taxName = 'Role';
$forCPT = 'team-member-cpt';

require get_template_directory() . '/_includes/wp/custom-taxonomies/_tax-template.php';

register_taxonomy($taxSlug,array($forCPT), $regTaxArgs);