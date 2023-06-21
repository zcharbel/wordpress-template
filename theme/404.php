<?php
/**
 * The main template file.
 *
 *
 * @since Main Template 1.0
 */

get_header(); ?>

<div class="block error-block">
    <div class="container">
        <?php the_field('404_page_content', 'option');?>
    </div>
</div>

<?php get_footer();
