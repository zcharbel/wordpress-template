<?php $text = get_field('text');
$shortcode = get_field('shortcode'); ?>
<div class="block block-contact-form">
	<div class="container">
		<?php if( $text ): ?>
			<div class="content">
				<?php echo $text; ?>
			</div>
		<?php endif; ?>
		<?php echo do_shortcode( $shortcode ); ?>
	</div>	
</div>