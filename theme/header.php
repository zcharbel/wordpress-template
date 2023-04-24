<?php
/**
 * The main template file.
 *
 *
 * @since Main Template 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<?php require get_template_directory().'/_partials/head.php'; ?>

<body <?php body_class(); ?>>

<?php 
$gtmTag = get_field('gtm_id', 'option');
if( $gtmTag ): ?>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?php echo get_field('gtm_id', 'option')?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

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
	
