<?php $image = get_field('image');?>
<div class="block block-image">	
	<div class="container">
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	</div>
</div>