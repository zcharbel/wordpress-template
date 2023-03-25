<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

global $post;

$postArgs = array(
	'post_type' =>  'faq',
	'posts_per_page' => 9,
	'paged' => $paged,
	'post_status' => 'publish'
);

// The Query
$the_query = new WP_Query($postArgs);

$section = 1;

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="faq accordion block">
		
		<?php while ($the_query->have_posts()) {
			$the_query->the_post(); ?>
			
			<div class="accordion-item">
				<h2 class="accordion-header" id="heading<?php echo '-' . $section; ?>">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo '-' . $section; ?>" aria-expanded="<?php echo $section == 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo '-' . $section; ?>">
					<?php the_title(); ?>
				</button>
				</h2>
				<div id="collapse<?php echo '-' . $section; ?>" class="accordion-collapse collapse<?php echo $section == 1 ? ' show' : ''; ?>" aria-labelledby="heading<?php echo '-' . $section; ?>" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<?php the_content(); ?>
					</div>
				</div>
			</div><!-- end .accordion-item -->
			
			<?php $section++;
		}?>
		
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