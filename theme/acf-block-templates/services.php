<?php
$topThree = get_field('show_top_three_services');

global $post;

if( $topThree ):
	$postCount = 3;
else:
	$postCount = -1;
endif;

$postArgs = array(
	'post_type' =>  'service-cpt',
	'posts_per_page' => $postCount,
	'post_status' => 'publish'
);

// The Query
$the_query = new WP_Query($postArgs);

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="block block-services">
		<div class="container">
			<?php $sectionTitle = get_field('section_title');
			if( $sectionTitle ): ?>
				<h2 class="title has-divider"><span><?php echo $sectionTitle ?></span></h2>
			<?php endif; ?>
			<div class="services three-columns">
				<?php while ($the_query->have_posts()) {
					$the_query->the_post(); 
					
					$postId = $post->ID;
					$title = get_the_title($postId);
					$iconUrl = get_the_post_thumbnail_url($postId);
					$iconAlt = get_post_meta(get_post_thumbnail_id($postId), '_wp_attachment_image_alt', TRUE);
					$description = get_field('description', $postId); ?>
					<div class="service column">
						<div class="icon">
							<img src="<?php echo $iconUrl; ?>"<?php echo $iconAlt ? ' alt="' . $iconAlt . '"' : ''; ?> />
						</div>
						<h5><?php echo $title; ?></h5>
						<div class="description">
							<?php echo $description; ?>
						</div>
					</div>
				<?php }?>
			</div><!-- end .services -->
			<?php wp_reset_postdata();?>
			<?php if( $topThree ): ?>
				<p class="btn" style="text-align: center; margin-top: 40px;">
					<a href="/services">See All Services</a>
				</p>
			<?php endif; ?>
		</div><!-- end .container -->
	</div><!-- end .block-services -->
	
<?php } else {
	// no posts found
} ?>