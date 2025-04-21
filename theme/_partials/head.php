<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta description="<?php echo YoastSEO()->meta->for_current_page()->description; ?>">

<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

<?php if ( is_404() ) {?>
  <title>Page Not Found | <?php bloginfo( 'name' ); ?></title>
<?php }elseif( is_home() ) {?>
  <title>Blog | <?php bloginfo( 'name' ); ?></title>
<?php }else{ ?>
  <title><?php echo YoastSEO()->meta->for_current_page()->title; ?></title>
<?php } ?>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<?php wp_head(); ?>