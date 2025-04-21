<?php
/**
 * The main template file.
 *
 *
 * @since Main Template 1.0
 */
 
 global $post;
 
get_header();

$categoryName = single_cat_title( '', false );

$term_obj_list = get_the_terms( $post->ID, 'taxonomy' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));


$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$postArgs = array(
    'post_type' =>  'post',
    'posts_per_page' => 8,
    'paged' => $paged,
    'post_status' => 'publish',
    'category_name' => $categoryName
);

// The Query
$the_query = new WP_Query($postArgs);

// The Loop
if ($the_query->have_posts()) { ?>

    <div class="block block__blog">
        <div class="container">
            <h5>Category Selected:</h5>
            <h1><?php echo $categoryName; ?></h1>
            <div class="posts two-columns">
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post(); 
                    
                    $date = get_the_date('Y/m/d');
                    $postThumbnail = get_the_post_thumbnail_url();
                    $postExcerpt = get_the_excerpt();
                    $title = get_the_title();
                    $permalink = get_the_permalink(); ?>
                    
                    <div class="post">
                    
                        <?php if( $date ): ?>
                            <h6 class="post__date"><?php echo $date; ?></h6>
                        <?php endif; ?>
                        
                        <h4 class="post__title"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h4>
                        <?php the_excerpt();?>
                        <p class="btn"><a href="<?php echo $permalink; ?>">Read Post</a></p>
                    
                    </div>
                <?php }?>
            </div>
            
            <?php if( $the_query->max_num_pages > 1 ): ?>
                <div class="pagination">
                    <?php
                        $big = 999999999; // need an unlikely integer
                        
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $the_query->max_num_pages
                        ) );
                    ?>
                </div>
            <?php endif; ?>
            
            <?php wp_reset_postdata();?>
        </div>
    </div>
    
<?php } else {
    // no posts found
}

get_footer();
