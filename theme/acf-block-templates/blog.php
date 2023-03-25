<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

global $post;

$postArgs = array(
	'post_type' =>  'post',
	'posts_per_page' => 9,
	'paged' => $paged,
	'post_status' => 'publish'
);

// The Query
$the_query = new WP_Query($postArgs);

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="blog block">
		
		<div class="posts">
			<?php while ($the_query->have_posts()) {
				$the_query->the_post(); ?>
				
				<div class="post">
					<p><?php the_date('Y/m/d');?></p>
					<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
	
<?php } else {
	// no posts found
} ?>