<?php
// accordion is driven by boostrap v5.

$section = 1;

if( have_rows('accordion') ): ?>
	<div class="accordion" id="accordionExample">

	<?php while( have_rows('accordion') ): the_row();

		// vars
		$title = get_sub_field('card_title');
		$content = get_sub_field('card_content');?>

		<div class="accordion-item">
			<h2 class="accordion-header" id="heading<?php echo '-' . $section; ?>">
			<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo '-' . $section; ?>" aria-expanded="<?php echo $section == 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo '-' . $section; ?>">
				<?php echo $title; ?>
			</button>
			</h2>
			<div id="collapse<?php echo '-' . $section; ?>" class="accordion-collapse collapse<?php echo $section == 1 ? ' show' : ''; ?>" aria-labelledby="heading<?php echo '-' . $section; ?>" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<?php echo $content; ?>
				</div>
			</div>
		</div><!-- end .accordion-item -->

	<?php
		$section++;
	endwhile; ?>
	</div>

<?php else :?>
	<h1>Please add items to the accordion.</h1>
<?php endif; ?>
