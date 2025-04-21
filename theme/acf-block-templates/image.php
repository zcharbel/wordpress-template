<?php $image = get_field('image');
$size = 'full';
$circleMask = get_field('add_circle_mask');?>
<div class="block block-image<?php echo $circleMask ? ' circle-mask' : '';?>">	
	<div class="container">
		<?php echo wp_get_attachment_image( $image['id'], $size ); ?>
	</div>
</div>