<?php 
  $title = get_the_title();
  $permalink = get_the_permalink();
?>

<div class="post-card">
  <div class="image">
    <?php if( $postThumbnail ): ?>
      <img src="<?php echo $postThumbnail; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri().'/assets/imgs/placeholder-thumb.jpg'; ?>" alt="placeholder thumbnail" />
    <?php endif; ?>
  </div>
  
  <?php if( $date ): ?>
    <p class="post__date"><?php echo $date; ?></p>
  <?php endif; ?>
  
  <h3 class="post__title"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
  
  <?php if( $postExcerpt ): ?>
    <p class="post__excerpt"><?php echo $postExcerpt ?></p>
  <?php endif; ?>

</div>