<?php 
//////////////////////
// FAQs Custom Post type
//////////////////////
$faqsLabels = array(
    'name' => _x( 'FAQs', 'Post Type General Name', 'wpframework' ),
    'singular_name' => _x( 'FAQ', 'Post Type Singular Name', 'wpframework' ),
    'add_new' => _x( 'Add FAQ', 'wpframework' ),
    'add_new_item' => _x( 'Add FAQ', 'wpframework' ),
    'edit_item' => _x( 'Edit FAQ', 'wpframework' ),
    'new_item' => _x( 'New FAQ', 'wpframework' ),
    'view_item' => _x( 'View FAQ', 'wpframework' ),
    'search_items' => _x( 'Search FAQ', 'wpframework' ),
    'not_found' => _x( 'No FAQs found', 'wpframework' ),
    'not_found_in_trash' => _x( 'No FAQs found in trash', 'wpframework' ),
    'parent_item_colon' => _x( 'Parent FAQ', 'wpframework' ),
    'menu_name' => _x( 'FAQs', 'wpframework' ),
);
$faqsArgs = array(
    'labels' => $faqsLabels,
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
        'slug'=>'faq'
    ),
    'capability_type' => 'post'
);

register_post_type( 'faq-cpt', $faqsArgs );