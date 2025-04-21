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

<a href="#main-content" class="skip-to-main-content-link">Skip to main content</a>

<header>
	<div class="header__content">
		<a href="/" class="logo">Logo</a>
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
	
