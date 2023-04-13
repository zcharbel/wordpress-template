<?php 
//////////////////////
// FAQs Custom Post type
//////////////////////
$teamMemberLabels = array(
    'name' => _x( 'Team Members', 'Post Type General Name', 'wpframework' ),
    'singular_name' => _x( 'Team Member', 'Post Type Singular Name', 'wpframework' ),
    'add_new' => _x( 'Add Team Member', 'wpframework' ),
    'add_new_item' => _x( 'Add Team Member', 'wpframework' ),
    'edit_item' => _x( 'Edit Team Member', 'wpframework' ),
    'new_item' => _x( 'New Team Member', 'wpframework' ),
    'view_item' => _x( 'View Team Member', 'wpframework' ),
    'search_items' => _x( 'Search Team Member', 'wpframework' ),
    'not_found' => _x( 'No Team Members found', 'wpframework' ),
    'not_found_in_trash' => _x( 'No Team Members found in trash', 'wpframework' ),
    'parent_item_colon' => _x( 'Parent Team Members:', 'wpframework' ),
    'menu_name' => _x( 'Team Members', 'wpframework' ),
);
$teamMemberArgs = array(
    'labels' => $teamMemberLabels,
    'hierarchical' => true,
    'supports' => array( 'title' ),
    'public' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'menu_icon' => 'dashicons-id',
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array(
        'slug'=>'team-member'
    ),
    'capability_type' => 'post'
);

register_post_type( 'team-member-cpt', $teamMemberArgs );