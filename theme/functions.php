<?php
/**
 * Theme Boilerplate functions and definitions
 **/

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

/* Adds Scripts */
require get_template_directory() . '/_includes/wp/cache-buster.php';
require get_template_directory() . '/_includes/wp/add-scripts.php';

/* Adds Custom Post Types & Taxonomies*/

/* Sets $frameworkName variable used in setting
    custom post types and taxonomies */
$frameworkName = 'wpframework';
require get_template_directory() . '/_includes/wp/custom-post-types.php';
require get_template_directory() . '/_includes/wp/custom-taxonomies.php';

/* Trims WP excerpt */
require get_template_directory() . '/_includes/wp/trim-excerpt.php';

/* Repositions Yoast SEO to bottom of page */
require get_template_directory() . '/_includes/wp/yoast-position.php';

/* Gutenberg Block Actions */
require get_template_directory() . '/_includes/wp/gutenberg-css.php';

/* Adds in ACF items */

/* Sets $frameworkName variable used in setting
    custom post types and taxonomies */
$ctName = 'ct-theme';
require get_template_directory() . '/_includes/acf/acf-excerpt.php';
require get_template_directory() . '/_includes/acf/acf-options.php';
require get_template_directory() . '/_includes/acf/acf-sync.php';
require get_template_directory() . '/_includes/acf/hide-gutenberg-blocks.php';
require get_template_directory() . '/_includes/acf/acf-block-categories.php';
require get_template_directory() . '/_includes/acf/acf-blocks.php';

/* Resgisters WP menus */
require get_template_directory() . '/_includes/nav/setup.php';
require get_template_directory() . '/_includes/nav/clean_nav_walker.php';
require get_template_directory() . '/_includes/nav/simple_menu.php';


//require get_template_directory() . '/_includes/wp/trim-excerpt.php';
require get_template_directory() . '/_includes/wp/add-read-more.php';
