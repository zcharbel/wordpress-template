<?php 
////////////////////////////////////////////
// "Role" custom taxonomy (Team Member)
////////////////////////////////////////////
global $frameworkName;
$taxName = 'Role';
$taxSlug = preg_replace('/\s+/', '-', $taxName);
$taxSlug = strtolower($taxSlug);

$labels = array(
    'name' => _x( $taxName.'s', $frameworkName ),
    'singular_name' => _x( $taxName, $frameworkName ),
    'search_items' =>  __( 'Search '.$taxName.'s' ),
    'all_items' => __( 'All '.$taxName.'s' ),
    'parent_item' => __( 'Parent '.$taxName ),
    'parent_item_colon' => __( 'Parent '.$taxName.':' ),
    'edit_item' => __( 'Edit '.$taxName ),
    'update_item' => __( 'Update '.$taxName ),
    'add_new_item' => __( 'Add New '.$taxName ),
    'new_item_name' => __( 'New '.$taxName.' Name' ),
    'menu_name' => __( $taxName.'s' ),
);

register_taxonomy('roles',array('team-member-cpt'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'roll' ),
));