<?php
// carousel is driven by boostrap v5.

$indicatorSlideNum = 1;
$indicatorSlideTo = 0;
$carouselSlide = 0;

if( have_rows('carousel') ): ?>
	
	<div class="block block-carousel">
		<div class="container">
			<?php while( have_rows('carousel') ): the_row();
	
				// vars
				$image = get_sub_field('card_image');
				$content = get_sub_field('card_content');?>
	
				<div class="<?php echo $carouselSlide == 0 ? ' active' : '';?>">
					<?php if( $image ):?>
						<img src="<?php echo $image['url']; ?>" <?php echo $image['alt'] ? 'alt="'.$image['alt'].'"' : '';?>>
					<?php endif; ?>
					<?php if( $content ): ?>
						<div class="content">
							<?php echo $content; ?>
						</div>
					<?php endif; ?>
				</div>
	
			<?php
				$carouselSlide++;
			endwhile; ?>
		</div>
		
		<script type="application/javascript">
			$( document ).ready(function() {
				$('.block-carousel .container').slick({
					infinite: true,
					dots: true
				});
			});
		</script>
		
	</div>
		
<?php else :?>
	<h1>Please add items to the carousel.</h1>
<?php endif; ?>