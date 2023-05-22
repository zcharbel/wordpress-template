<?php 
//////////////////////
// Team Member Custom Post type
//////////////////////

$cptName = 'Team Member';
$cptSlug = preg_replace('/\s+/', '-', $cptName);
$cptSlug = strtolower($cptSlug);

$teamMemberLabels = array(
    'name' => _x( $cptName . 's', 'Post Type General Name', $framworkName ),
    'singular_name' => _x( $cptName, 'Post Type Singular Name', $framworkName ),
    'add_new' => _x( 'Add ' . $cptName, $framworkName ),
    'add_new_item' => _x( 'Add ' . $cptName, $framworkName ),
    'edit_item' => _x( 'Edit ' . $cptName, $framworkName ),
    'new_item' => _x( 'New ' . $cptName, $framworkName ),
    'view_item' => _x( 'View ' . $cptName, $framworkName ),
    'search_items' => _x( 'Search ' . $cptName, $framworkName ),
    'not_found' => _x( 'No ' . $cptName . 's found', $framworkName ),
    'not_found_in_trash' => _x( 'No ' . $cptName . 's found in trash', $framworkName ),
    'parent_item_colon' => _x( 'Parent ' . $cptName, $framworkName ),
    'menu_name' => _x( $cptName . 's', $framworkName ),
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
    'menu_icon' => 'dashicons-admin-users',
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array(
        'slug'=>$cptSlug
    ),
    'capability_type' => 'post'
);

register_post_type( $cptSlug . '-cpt', $teamMemberArgs );