<div class="block block-how-i-think">
	<div class="container">
		<?php $title = get_field('title');
		
		if( $title ): ?>
			<h2 class="title has-divider"><span><?php echo $title; ?></span></h2>
		<?php endif;
		
		if( have_rows('thoughts') ): ?>
		
			<?php while( have_rows('thoughts') ): the_row(); 
		
				// vars
				$tTitle = get_sub_field('thought_title');
				$tText = get_sub_field('thought_text'); ?>
				
				<h3><?php echo $tTitle; ?></h3>
				<p class="large"><?php echo $tText;?></p>
			<?php endwhile; ?>
		
		<?php else :
			// no rows found			
		endif; ?>
		
	</div>
</div>
	