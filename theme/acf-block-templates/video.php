<?php 
	$videoType = get_field('video_type');
	$ytId = get_field('youtube_video_id');
	$vimeoId = get_field('vimeo_video_id'); ?>

<div class="block block-video">
	
	<?php if( $videoType = 'youtube' ): ?>
		<iframe class="video-holder" src="https://www.youtube.com/embed/<?php echo $ytId; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	<?php else: ?>
		<iframe class="video-holder" src="https://player.vimeo.com/video/<?php echo $vimeoId; ?>?h=13d250d786&title=0&byline=0" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen></iframe>
	<?php endif; ?>
	
</div>