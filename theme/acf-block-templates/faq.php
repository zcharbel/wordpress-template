<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

global $post;

$postArgs = array(
	'post_type' =>  'faq-cpt',
	'posts_per_page' => 9,
	'paged' => $paged,
	'post_status' => 'publish'
);

// The Query
$the_query = new WP_Query($postArgs);

$section = 1;

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="faq-accordion accordion-list block">
		
		<?php while ($the_query->have_posts()) {
			$the_query->the_post(); 
			
			$title = get_the_title();
			$content = get_field('answer', $post->ID);
			
			require get_template_directory().'/_partials/blocks/accordion-content.php'; 
			
			$section++;
		}
		
		if( $the_query->max_num_pages > 1 ): ?>
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
	
<?php } else {
	// no posts displayed
} ?>