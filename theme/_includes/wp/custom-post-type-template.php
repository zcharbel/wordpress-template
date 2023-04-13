<?php 

$CPTName;

$temMemberssLabels = array(
    'name' => _x( 'Services', 'services' ),
    'singular_name' => _x( 'Service', 'services' ),
    'add_new' => _x( 'Add Service', 'services' ),
    'add_new_item' => _x( 'Add Services', 'services' ),
    'edit_item' => _x( 'Edit Services', 'services' ),
    'new_item' => _x( 'New Services', 'services' ),
    'view_item' => _x( 'View Services', 'services' ),
    'search_items' => _x( 'Search Services', 'services' ),
    'not_found' => _x( 'No Services found', 'services' ),
    'not_found_in_trash' => _x( 'No Services found in trash', 'services' ),
    'parent_item_colon' => _x( 'Parent Services:', 'services' ),
    'menu_name' => _x( 'Services', 'services' ),
);
$temMemberssArgs = array(
    'labels' => $temMemberssLabels,
    'hierarchical' => true,
    'supports' => array( 'title' ),
    'public' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'menu_icon' => 'dashicons-id',
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array(
        'slug'=>'service'
    ),
    'capability_type' => 'post'
);

register_post_type( 'service', $temMemberssArgs );
