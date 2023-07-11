<?php

function ct_theme_category( $categories ) {
    
    global $ctName;
    
    $custom_block = array(
        'slug'  => $ctName,
        'title' => __( 'Custom Theme', $ctName ),
    );

    $categories_sorted = array();
    $categories_sorted[0] = $custom_block;

    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }

    return $categories_sorted;
}
add_filter( 'block_categories', 'ct_theme_category', 10, 2);