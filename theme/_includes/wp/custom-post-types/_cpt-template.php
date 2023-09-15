<?php 
global $frameworkName;
global $cptName;
global $cptSupports;
global $menuIcon;

if(str_contains($cptName, 'y')){
    $cptNamePlural = preg_replace('/y/', 'ie', $cptName);
}else{
    $cptNamePlural = $cptName;
}
$cptSlug = preg_replace('/\s+/', '-', $cptName);
$cptSlug = strtolower($cptSlug);

$cptTemplateLabels = array(
    'name' => _x( $cptNamePlural . 's', 'Post Type General Name', $frameworkName ),
    'singular_name' => _x( $cptName, 'Post Type Singular Name', $frameworkName ),
    'add_new' => _x( 'Add ' . $cptName, $frameworkName ),
    'add_new_item' => _x( 'Add ' . $cptName, $frameworkName ),
    'edit_item' => _x( 'Edit ' . $cptName, $frameworkName ),
    'new_item' => _x( 'New ' . $cptName, $frameworkName ),
    'view_item' => _x( 'View ' . $cptName, $frameworkName ),
    'search_items' => _x( 'Search ' . $cptName, $frameworkName ),
    'not_found' => _x( 'No ' . $cptNamePlural . 's found', $frameworkName ),
    'not_found_in_trash' => _x( 'No ' . $cptNamePlural . 's found in trash', $frameworkName ),
    'parent_item_colon' => _x( 'Parent ' . $cptName, $frameworkName ),
    'menu_name' => _x( $cptNamePlural . 's', $frameworkName ),
);

$cptTemplateArgs = array(
    'labels' => $cptTemplateLabels,
    'hierarchical' => true,
    'supports' => $cptSupports,
    'public' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'menu_icon' => $menuIcon,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array(
        'slug'=>$cptSlug
    ),
    'capability_type' => 'post'
);