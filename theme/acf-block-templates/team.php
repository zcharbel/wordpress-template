<?php 
	$args = array(
		'post_type' => 'team-member-cpt',
		'posts_per_page' => -1,
	);

 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) { ?>

	<div class="block block-team-members">
		<div class="container">
			<?php // Start looping over the query results.
			while ( $query->have_posts() ) {
 		
				$query->the_post();
				global $post; 
				
				$title = get_the_title();
				// $content = get_field('answer', $post->ID);?>
			
				<div class="team-members__team-member">
					<?php echo $title ?>
				</div>
					
			<?php } ?>
		</div>
	</div>
<?php }
 
// Restore original post data.
wp_reset_postdata();
 
?>