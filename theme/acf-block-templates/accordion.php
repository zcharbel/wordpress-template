<?php
// accordion is driven by boostrap v5.?>

<?php $section = 1;

if( have_rows('accordion') ): ?>
	<div class="block accordion-list">

	<?php while( have_rows('accordion') ): the_row();

		// vars
		$title = get_sub_field('card_title');
		$content = get_sub_field('card_content');
		
		require get_template_directory().'/_partials/blocks/accordion-content.php'; 
		$section++;
		
	endwhile; ?>
	</div>

<?php else :?>
	<h1>Please add items to the accordion.</h1>
<?php endif; ?>
