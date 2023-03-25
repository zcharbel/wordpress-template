<?php 
	$args = array(
		'post_type' => 'client',
		'posts_per_page' => -1,
		'order'   => 'DESC',
	);

 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) { ?>

	<div class="clients block">
		<?php // Start looping over the query results.
		while ( $query->have_posts() ) {
 	
			$query->the_post();
			global $post;
			
			$logo = get_field('logo', $post->ID); ?>
		
			<div class="client">
				<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" />
			</div>
				
		<?php } ?>
	</div>
<?php }
 
// Restore original post data.
wp_reset_postdata();
 
?>