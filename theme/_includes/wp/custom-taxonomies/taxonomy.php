<?php 
////////////////////////////////////////////
// "Role" custom taxonomy (Team Member)
////////////////////////////////////////////
$roleLabels = array(
    'name' => _x( 'Roles', 'roles' ),
    'singular_name' => _x( 'Role', 'roles' ),
    'search_items' =>  __( 'Search Roles' ),
    'all_items' => __( 'All Roles' ),
    'parent_item' => __( 'Parent Role' ),
    'parent_item_colon' => __( 'Parent Role:' ),
    'edit_item' => __( 'Edit Role' ),
    'update_item' => __( 'Update Role' ),
    'add_new_item' => __( 'Add New Role' ),
    'new_item_name' => __( 'New Role Name' ),
    'menu_name' => __( 'Roles' ),
);

register_taxonomy('roles',array('team_member_cpt'), array(
    'hierarchical' => true,
    'labels' => $roleLabels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'role-group' ),
));