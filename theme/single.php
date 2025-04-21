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
            <div class="col left">
                <div class="return-to-blog">
                    <a href="/blog/">Return to blog</a>
                </div>
                <?php $date = get_the_date('Y/m/d'); ?>
                <h6 class="post__date"><strong>Date:</strong> <span><?php echo $date; ?></span></h6>
                <?php 
                    $post_categories = wp_get_post_categories( $post->ID, array( 'fields' => 'all' ) );
                    $cats = array();
                    
                    if( $post_categories ){ // Always Check before loop!
                        echo '<ul class="tags"><li><strong>Tags:</strong></li>';
                        foreach($post_categories as $c){
                            $cats[] = array( 'name' => $c->name, 'slug' => $c->slug );
                            // Or we can just print it directly
                            printf('<li><a href="%s">%s</a></li>', esc_url( get_category_link( $c->term_id ) ), $c->name );
                        }	
                        echo '</ul>';
                    }
                ?>
            </div>
            <div class="col right">
                <h1><?php the_title(); ?></h1>
                <?php // Include the page content template.
                the_content();?>
                <div class="return-to-blog">
                    <a href="/blog/">Return to blog</a>
                </div>
            </div>
        </div>
        
        <?php // End of the loop.
    endwhile; 
    
get_footer();