<?php 
	$args = array(
		'post_type' => 'work_piece',
		'posts_per_page' => -1,
		'order'   => 'ASC',
	);

 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) { ?>
	<div class="work block">
		<?php // Start looping over the query results.
		while ( $query->have_posts() ) {
 	
			$query->the_post();
			
			global $post;
							
			$image = get_field('image', $post->ID);
			$type = get_field('project_type', $post->ID);
			$lang = get_field('languages', $post->ID);
			$frame = get_field('frameworks', $post->ID); ?>
		
			<div class="work-piece">
				<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid" />
				<h2><?php the_title(); ?></h2>
				<div class="sections">
					<section>
						<p class="title"><strong>Languages:</strong></p>
						<p><?php echo implode(', ', $lang); ?></p>
					</section>
					<section>
						<p class="title"><strong>Frameworks:</strong></p>
						<p><?php echo implode(', ', $frame); ?></p>
					</section>
				</div>
			</div>
			
		<?php } ?>
	</div>
<?php }
 
// Restore original post data.
wp_reset_postdata();
 
?>