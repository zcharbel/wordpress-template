<?php
// accordion is driven by boostrap v5.?>

<?php $section = 1;

if( have_rows('accordion') ): ?>
	<div class="block accordion-list">

	<?php while( have_rows('accordion') ): the_row();

		// vars
		$title = get_sub_field('card_title');
		$content = get_sub_field('card_content');?>

		<div class="accordion"><?php echo $title; ?></div>
		<div class="panel" style="display: none;">
			<?php echo $content; ?>
		</div>
	<?php
		$section++;
	endwhile; ?>
	</div>

<?php else :?>
	<h1>Please add items to the accordion.</h1>
<?php endif; ?>
