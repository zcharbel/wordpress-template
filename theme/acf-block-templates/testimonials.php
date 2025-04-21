<?php
global $post;
$indicatorSlideNum = 1;
$indicatorSlideTo = 0;
$carouselSlide = 0;

$postArgs = array(
	'post_type' =>  'testimonial-cpt',
	'posts_per_page' => -1,
);

// The Query
$the_query = new WP_Query($postArgs);

// The Loop
if ($the_query->have_posts()) { ?>

	<div class="block block-testimonials">
		<div class="container">
			<?php while ($the_query->have_posts()) {
				$the_query->the_post(); 
				
					$postId = $post->ID;
					$name = get_the_title(); 
					$quote = get_field('quote', $postId);
					$company = get_field('company', $postId); ?>
				
					<div class="<?php echo $carouselSlide == 0 ? ' active' : '';?>">
						<h4><?php echo $quote; ?></h4>
						<h5 class="name"><strong><?php echo $name; ?></strong></h5>
						<?php if( $company ): ?>
							<p class="company"><strong><?php echo $company; ?></strong></p>
						<?php endif; ?>
					</div>
				
				<?php $carouselSlide++;
				}
			
			wp_reset_postdata();?>
		</div>
		
		<script type="application/javascript">
			$( document ).ready(function() {
				$('.block-testimonials .container').slick({
					infinite: true,
					//dots: true
				});
			});
		</script>
		
	</div>
	
	
	
<?php } else {
	// no posts found
} ?>