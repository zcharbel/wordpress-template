<?php
/**
 * Theme Boilerplate functions and definitions
 **/

function no_function_admin_bar() {
	return false;
}
add_filter('show_admin_bar', 'no_function_admin_bar');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

/* Adds Scripts */
require get_template_directory() . '/_includes/wp/cache-buster.php';
require get_template_directory() . '/_includes/wp/add-scripts.php';

/* Adds Custom Post Types */
require get_template_directory() . '/_includes/wp/custom_post_types.php';

/* Adds Custom Taxonomies */
require get_template_directory() . '/_includes/wp/custom_taxonomies.php';

/* Trims WP excerpt */
require get_template_directory() . '/_includes/wp/trim-excerpt.php';

/* Repositions Yoast SEO to bottom of page */
require get_template_directory() . '/_includes/wp/yoast-position.php';

/* Gutenberg Block Actions */
require get_template_directory() . '/_includes/wp/gutenberg-css.php';
require get_template_directory() . '/_includes/wp/hide-gutenberg-blocks.php';

/* Adds in ACF items */
require get_template_directory() . '/_includes/acf/acf-excerpt.php';
require get_template_directory() . '/_includes/acf/acf-options.php';
require get_template_directory() . '/_includes/acf/acf-sync.php';
require get_template_directory() . '/_includes/acf/acf-layout.php';
require get_template_directory() . '/_includes/acf/acf-block-categories.php';
require get_template_directory() . '/_includes/acf/acf-blocks.php';

/* Resgisters WP menus */
require get_template_directory() . '/_includes/nav/setup.php';
require get_template_directory() . '/_includes/nav/clean_nav_walker.php';
require get_template_directory() . '/_includes/nav/simple_menu.php';
require get_template_directory() . '/_includes/nav/wp-bootstrap-navwalker.php';
