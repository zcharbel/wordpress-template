<?php

/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage Main Template
 * @since Main Template 1.0
 */

get_header();

    // Start the loop.
    while (have_posts()) : the_post(); ?>
        
        <div class="content">
            <div class="return-to-blog">
                <a href="/blog">Return to blog</a>
            </div>
            <h1><?php the_title(); ?></h1>
            <?php // Include the page content template.
            the_content();?>
            <div class="return-to-blog">
                <a href="/blog">Return to blog</a>
            </div>
        </div>
        
        <?php // End of the loop.
    endwhile; 
    
get_footer();