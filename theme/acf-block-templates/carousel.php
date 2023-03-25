<?php
// carousel is driven by boostrap v5.

$indicatorSlideNum = 1;
$indicatorSlideTo = 0;
$carouselSlide = 0;

if( have_rows('carousel') ): ?>
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<?php while( have_rows('carousel') ): the_row(); ?>

				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $indicatorSlideTo; ?>" aria-label="Slide <?php echo $indicatorSlideNum; ?>"<?php echo $indicatorSlideTo == 0 ? ' class="active" aria-current="true"' : '';?>></button>

			<?php
				$indicatorSlideNum++;
				$indicatorSlideTo++;
			 endwhile; ?>
		</div>

		<div class="carousel-inner">

			<?php while( have_rows('carousel') ): the_row();

				// vars
				$image = get_sub_field('card_image');
				$content = get_sub_field('card_content');?>

				<div class="carousel-item<?php echo $carouselSlide == 0 ? ' active' : '';?>">
					<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					<?php if( $content ): ?>
						<div class="carousel-caption">
							<?php echo $content; ?>
						</div>
					<?php endif; ?>
				</div>

			<?php
				$carouselSlide++;
			endwhile; ?>

		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>

	</div><!-- end .carousel -->

<?php else :?>
	<h1>Please add items to the carousel.</h1>
<?php endif; ?>