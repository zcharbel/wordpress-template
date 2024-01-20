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
$gtmTag = get_field('google_tag_manager_id', 'option');

if( $gtmTag ): ?>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?php echo $gtmTag?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<header>
	<div class="header__content">
		<?php $logo = get_field('co_info_logo', 'option')?>
		<a href="/" class="logo" style="background-image:url(<?php echo $logo['url']; ?>)">Logo</a>
		<!-- main navigation -->
		<?php simple_menu('main'); ?>
		
		<div class="nav-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</div>
	</div>	
</header>

<!-- Begin Main Content Container -->
<div id="main-content">
	
