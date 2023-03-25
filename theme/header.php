<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	    <!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-<?php echo get_field('gtm_id', 'option')?>');</script>
		<!-- End Google Tag Manager -->

	    <meta charset="<?php bloginfo( 'charset' ); ?>">
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

    </head>
    <body <?php echo body_class(); ?>>
	    <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?php echo get_field('gtm_id', 'option')?>"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

        <header>

	        <!-- main navigation -->
				
			<?php simple_menu('primary'); ?>
			
			<div class="nav-toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			
		</header>
		
		<!-- Begin Main Content Container -->
		<div id="main-content">