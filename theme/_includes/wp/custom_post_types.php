<?php 

/*------------------------------------------
    Register Custom Post Types
------------------------------------------*/
function register_custom_post_types() {
        
    //////////////////////
    // Services
    //////////////////////
    $servicesLabels = array(
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
    $servicesArgs = array(
        'labels' => $servicesLabels,
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
    
    register_post_type( 'service', $servicesArgs );
    
    
    //////////////////////
    // FAQs
    //////////////////////
    $faqsLabels = array(
        'name' => _x( 'FAQs', 'faqs' ),
        'singular_name' => _x( 'FAQ', 'faqs' ),
        'add_new' => _x( 'Add FAQ', 'faqs' ),
        'add_new_item' => _x( 'Add FAQ', 'faqs' ),
        'edit_item' => _x( 'Edit FAQ', 'faqs' ),
        'new_item' => _x( 'New FAQ', 'faqs' ),
        'view_item' => _x( 'View FAQ', 'faqs' ),
        'search_items' => _x( 'Search FAQ', 'faqs' ),
        'not_found' => _x( 'No FAQs found', 'faqs' ),
        'not_found_in_trash' => _x( 'No FAQs found in trash', 'faqs' ),
        'parent_item_colon' => _x( 'Parent FAQs:', 'faqs' ),
        'menu_name' => _x( 'FAQs', 'faqs' ),
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
            'slug'=>'faq-post'
        ),
        'capability_type' => 'post'
    );
    
    register_post_type( 'faq', $faqsArgs );
    
    //////////////////////
    // Clients
    //////////////////////
    $clientsLabels = array(
        'name' => _x( 'Clients', 'clients' ),
        'singular_name' => _x( 'Client', 'clients' ),
        'add_new' => _x( 'Add Client', 'clients' ),
        'add_new_item' => _x( 'Add Client', 'clients' ),
        'edit_item' => _x( 'Edit Client', 'clients' ),
        'new_item' => _x( 'New Client', 'clients' ),
        'view_item' => _x( 'View Client', 'clients' ),
        'search_items' => _x( 'Search Client', 'clients' ),
        'not_found' => _x( 'No Clients found', 'clients' ),
        'not_found_in_trash' => _x( 'No Clients found in trash', 'clients' ),
        'parent_item_colon' => _x( 'Parent Clients:', 'clients' ),
        'menu_name' => _x( 'Clients', 'clients' ),
    );
    $clientsArgs = array(
        'labels' => $clientsLabels,
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
            'slug'=>'client'
        ),
        'capability_type' => 'post'
    );
    
    register_post_type( 'client', $clientsArgs );
    
    //////////////////////
    // Work Pieces
    //////////////////////
    $worksLabels = array(
        'name' => _x( 'Work Pieces', 'work-pieces' ),
        'singular_name' => _x( 'Work Piece', 'work-pieces' ),
        'add_new' => _x( 'Add Work Piece', 'work-pieces' ),
        'add_new_item' => _x( 'Add Work Piece', 'work-pieces' ),
        'edit_item' => _x( 'Edit Work Piece', 'work-pieces' ),
        'new_item' => _x( 'New Work Piece', 'work-pieces' ),
        'view_item' => _x( 'View Work Piece', 'work-pieces' ),
        'search_items' => _x( 'Search Work Piece', 'work-pieces' ),
        'not_found' => _x( 'No Work Pieces found', 'work-pieces' ),
        'not_found_in_trash' => _x( 'No Work Pieces found in trash', 'work-pieces' ),
        'parent_item_colon' => _x( 'Parent Work Pieces:', 'work-pieces' ),
        'menu_name' => _x( 'Work Pieces', 'work-pieces' ),
    );
    $worksArgs = array(
        'labels' => $worksLabels,
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
            'slug'=>'work-piece'
        ),
        'capability_type' => 'post'
    );
    
    register_post_type( 'work_piece', $worksArgs );
    
}
add_action( 'init', 'register_custom_post_types' );

