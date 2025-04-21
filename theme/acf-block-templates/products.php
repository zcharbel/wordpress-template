<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

global $post;

$postArgs = array(
	'post_type' =>  'product',
	'posts_per_page' => 8,
	'paged' => $paged,
	'post_status' => 'publish'
);

// The Query
$the_query = new WP_Query($postArgs);

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="block block-products">
		<div class="container">
			<div class="posts three-columns">
				<?php while ($the_query->have_posts()) {
					$the_query->the_post(); 
					
					$postThumbnail = get_the_post_thumbnail_url();
					$postExcerpt = get_the_excerpt();
					$title = get_the_title();
					$permalink = get_the_permalink(); ?>
					
					<div class="post">
						<h4 class="post__title"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h4>
						<?php the_excerpt();?>
						<p class="btn"><a href="<?php echo $permalink; ?>">View Product</a></p>
					
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
} ?>