<?php

/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage Main Template
 * @since Main Template 1.0
 */
?>

<?php get_header(); ?>

<!-- Page Content -->

<?php
if(have_rows('panel')) :

	$block_count = 1;
	
	while(have_rows('panel')) : the_row();
	
		ACF_Layout::render(get_row_layout(), $block_count);
		$block_count++;
		
	endwhile;

endif;
?>

<?php get_footer(); ?>
