<?php $gtmTag = get_field('google_tag_manager_id', 'option');
$gaTag = get_field('google_analytics_id', 'option');

if( $gtmTag ): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo $gtmTag; ?>');</script>
    <!-- End Google Tag Manager -->
<?php endif;

if( $gaTag ): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JX7WHRGQN2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-<?php echo $gaTag; ?>');
    </script>
<?php endif; ?>

<?php if( $gaTag ): ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gaTag?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $gaTag; ?>');
</script>

<?php endif; ?>


<meta content="<?php get_bloginfo('html_type'); ?>" charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
  <title><?php the_title(); ?> | <?php bloginfo( 'name' ); ?></title>
<?php } ?>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<?php wp_head(); ?>