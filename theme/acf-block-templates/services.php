<?php 
	$args = array(
		'post_type' => 'service',
		'posts_per_page' => -1
	);

 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) { ?>
	<div class="services block">
	
		<?php // Start looping over the query results.
		while ( $query->have_posts() ) {
 	
			$query->the_post();
			
			global $post;
			
			$i++;				
			$description = get_field('description', $post->ID); ?>
		
			<div class="service">
				<h3><?php the_title(); ?></h3>
				<p><?php echo $description; ?></p>
			</div>
			
		<?php 
			$i++;
		} ?>
	</div>
<?php }
 
// Restore original post data.
wp_reset_postdata();
 
?>