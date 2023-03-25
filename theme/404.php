<?php

/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage Main Template
 * @since Main Template 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">


<body <?php body_class(); ?>>

    <?php get_header(); ?>
	
    <!-- Page Content -->
    <div class="container">
    	<div class="row">
    		<div class="col-12">
    			<h1>404 - Page Not Found</h1>
    			<p>It looks like we can't find the page you're looking for.</p>
    		</div>
    	</div>
    </div>

    <?php get_footer(); ?>

</body>

</html>
