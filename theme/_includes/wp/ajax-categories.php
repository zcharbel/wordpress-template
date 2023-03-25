<?php

function publications_scripts() {
    wp_enqueue_script ("publicationAjax", get_template_directory_uri() . "/assets/js/publication-filter.js", array('jquerymin')); 
    //the_ajax_script will use to print admin-ajaxurl in custom ajax.js
    wp_localize_script('publicationAjax', 'pubAjax', 
    	array('pubAjaxUrl' => admin_url('admin-ajax.php'))
    );
} 

add_action("wp_enqueue_scripts", "publications_scripts");


////////////////////////////////////////////////////////
// AJAX Callback
////////////////////////////////////////////////////////  
add_action('wp_ajax_publications', 'ajax_publications_callback');
add_action('wp_ajax_nopriv_publications', 'ajax_publications_callback');

function ajax_publications_callback() {
  	
  	$category = $_POST['category'];
	
	$args = array(
		'post_type' => 'post',
	    'post__in' => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1,
	);		
	
	if(isset($category)){
		$args['category__in'] = array($category);
	}
	
	// Custom query.
	$query = new WP_Query( $args );
	 
	// Check that we have query results.
	if ( $query->have_posts() ) { ?>
	
	    <?php // Start looping over the query results.
	    while ( $query->have_posts() ) {
	 
	        $query->the_post(); 
		        
	        $hasThirdLink = get_field('link_to_third_party_site');
			$thirdLink = get_field('3rd_party_link'); ?>
	        
	        <div class="jumbotron">
				<div class="container">
					<div class="row publications">
						
						<div class="col-12 col-lg-6 main-article">
							<div class="row">
								<div class="col-4">
									<p><?php $yearMonth = get_the_date( 'F Y' ); 
										echo $yearMonth;?></p>
									<h1><?php $day = get_the_date( 'j' ); 
										echo $day;?></h1>
								</div>
								
								<div class="col-8">
									<?php $categories = get_the_category();
									$separator = ' ';
									$output = '';
									if ( ! empty( $categories ) ) {
									    foreach( $categories as $category ) {
									        $output .= '<p>' . esc_html( $category->name ) . '</p>';
									    }
									    echo trim( $output, $separator );
									}?>
								</div>
								<div class="col-12 col-md-11 col-xl-10 title">
									<h2>
										<?php if( $hasThirdLink == 'yes' ): ?>
											<a href="<?php echo $thirdLink['url']; ?>" target="_blank"><?php the_title(); ?></a>
										<?php else: ?>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<?php endif; ?>
									</h2>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-lg-6 bg-img" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
					
					</div>
				</div>
			</div>	
				
	    <?php } ?>
	<?php }
	 
	// Restore original post data.
	wp_reset_postdata();
		
	$category = $_POST['category'];
	
	$nonstickyargs = array(
		'post_type' => 'post',
	    'posts_per_page' => -1,
		'order'   => 'DESC',
		'post__not_in' => get_option( 'sticky_posts' )
	);		
	
	if(isset($category)){
		$nonstickyargs['category__in'] = array($category);
	}
	
	// Custom query.
	$query = new WP_Query( $nonstickyargs );
	 
	// Check that we have query results.
	if ( $query->have_posts() ) { ?>
	
	    <?php // Start looping over the query results.
	    while ( $query->have_posts() ) {
	 
	        $query->the_post(); 
		        
	        $hasThirdLink = get_field('link_to_third_party_site');
			$thirdLink = get_field('3rd_party_link'); ?>
	        
	        <div class="jumbotron">
				<div class="container">
					<div class="row publications">
						
						<div class="col-6 col-lg-2">
							<p><?php $yearMonth = get_the_date( 'F Y' ); 
								echo $yearMonth;?></p>
							<h1><?php $day = get_the_date( 'j' ); 
								echo $day;?></h1>
						</div>
						
						<div class="col-6 col-lg-4">
							<?php $categories = get_the_category();
							$separator = ' ';
							$output = '';
							if ( ! empty( $categories ) ) {
							    foreach( $categories as $category ) {
							        $output .= '<p>' . esc_html( $category->name ) . '</p>';
							    }
							    echo trim( $output, $separator );
							}?>
						</div>
						
						<div class="col-12 col-lg-6 title">
							<h3>
								<?php if( $hasThirdLink == 'yes' ): ?>
									<a href="<?php echo $thirdLink['url']; ?>" target="_blank"><?php the_title(); ?></a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php endif; ?>
							</h3>
						</div>
					</div>
				</div>
			</div>	
				
	    <?php } ?>
	<?php }
	 
	// Restore original post data.
	wp_reset_postdata();	
	
    die();
}