<?php 
	$args = array(
		'post_type' => 'team-member-cpt',
		'posts_per_page' => -1,
	);

 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) { ?>

	<div class="block team-members">
		<?php // Start looping over the query results.
		while ( $query->have_posts() ) {
 	
			$query->the_post();
			global $post; ?>
		
			<div class="team-members__member">
				<?php the_title(); ?>
			</div>
				
		<?php } ?>
	</div>
<?php }
 
// Restore original post data.
wp_reset_postdata();
 
?>