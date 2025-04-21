<div class="block page-header<?php echo $bgImg ? ' has-bg-img' : ' blue-bg';?>"<?php echo $bgImg ? 'style="background-image: url(' . $bgImg . ');"' : '';?>>
  <div class="container<?php echo $blockHeight == 'short'? ' short' : ''; ?>">
    <?php if( $text ): ?>
      <div class="text">
        <?php echo $text; ?>
      </div>
    <?php endif; ?>
    <?php if( $btn ): ?>
      <p class="btn">
        <a href="<?php echo $btn['url'] ?>" <?php $btn['target'] ? print(' target="_blank"') : ''; ?>><?php echo $btn['title'] ?></a>
      </p>
    <?php endif; ?>
  </div>
</div>