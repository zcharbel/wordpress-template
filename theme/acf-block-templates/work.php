<?php global $post;

$postArgs = array(
	'post_type' =>  'work-piece-cpt',
	'posts_per_page' => -1,
	'post_status' => 'publish'
);

// The Query
$the_query = new WP_Query($postArgs);

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="block block-work">
		<div class="container">
			<div class="works three-columns">
				<?php while ($the_query->have_posts()) {
					$the_query->the_post(); 
					
					$postId = $post->ID;
					$title = get_the_title($postId);
					$img = get_field('image', $postId);
					$excerpt = get_field('excerpt', $postId);
					$siteLink = get_field('site_link', $postId);
					$responsibleFor = get_field('responsible_for_items');
					$wasCustom = get_field('was_this_a_custom_theme');
					$themeUsed = get_field('theme_used');?>
					
					<div class="work column">
						<div class="work-thumb">
							<img src="<?php echo $img['url'] ?>" <?php echo $img['alt'] ? 'alt="' . $img['alt'] . '"' : '';?> />
						</div>
						<h3><?php echo $title; ?></h3>
						<?php if( $excerpt ): ?>
							<p class="excerpt">
								<?php echo $excerpt; ?>
							</p>
						<?php endif;
						
						if( $responsibleFor || $wasCustom ): ?>
							<div class="inputs">
								<?php if( $responsibleFor ): ?>
									<div class="responsible-for">
										<h6>Responsible For:</h6>
										<p><?php echo implode( ', ', $responsibleFor ); ?></p>
									</div>
								<?php endif; ?>
								<?php if( $wasCustom ): ?>
									<div class="theme-used">
										<h6>Theme Used:</h6>
										<p><?php echo $themeUsed ? $themeUsed : 'Custom Built'; ?></p>
									</div>
								<?php endif; ?>
							</div>
						<?php endif;
						
						if( $siteLink ): ?>
							<p class="btn">
								<a href="<?php echo $siteLink['url'] ?>" <?php $siteLink['target'] ? print(' target="_blank"') : ''; ?>>View Site</a>
							</p>
						<?php endif; ?>
					</div>
				<?php } ?>
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