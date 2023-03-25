<?php
	
// Scripts for Ajax Filter Search
  
function ajax_date_filter_scripts() {
    wp_enqueue_script( 'date-filter_search', get_stylesheet_directory_uri(). '/assets/js/date-filter.js', array(), null, true );
    wp_localize_script( 'date-filter_search', 'ajax_url', admin_url('admin-ajax.php') );
    
}

////////////////////////////////////////////////////////
// Shortcode: [ajax_date_filter]
////////////////////////////////////////////////////////
function ajax_date_filter_shortcode() {
	
	// calls script for ajax filter function
	ajax_date_filter_scripts();
	
    ob_start(); ?>
  
    <!-- Search Dropdowns are added here -->
	<div class="search-section">
				    
	    <form action="" method="get" class="filter foo">
			<input type="submit" value="desc" class="desc">
		</form>
				
	</div> <!-- end .col-12 -->
      
    <?php
    return ob_get_clean();
}
  
add_shortcode ('ajax_date_filter', 'ajax_date_filter_shortcode');

////////////////////////////////////////////////////////
// AJAX Callback
////////////////////////////////////////////////////////  
add_action('wp_ajax_ajax_date_filter', 'ajax_date_filter_callback');
add_action('wp_ajax_nopriv_ajax_date_filter', 'ajax_date_filter_callback');

function ajax_date_filter_callback() {
  
    header("Content-Type: application/json"); 
		
    global $post;
    
	if ($_GET['submit'] == 'desc') {
		$args = array(
			'post_type' => 'gut_check',
			'posts_per_page' => -1,
			'order' => 'DESC'
		);
	} else {
		$args = array(
			'post_type' => 'gut_check',
			'posts_per_page' => 1,
			'order' => 'DESC'
		);
	}
	
    $the_query = new WP_Query( $args );
    
    if ( $the_query->have_posts() ) {
  
        $result = array();
        
        while ( $the_query->have_posts() ) {
	        
            $the_query->the_post();
  
            $result[] = array(
                "title" => get_title(),
                "rowCount" => $rowCount,
                "date" => get_the_date('n/j/y'),
                "initials" => get_field('initials'),
                "permalink" => get_permalink(),
            );
            
            $rowCount++;
            
        }
        wp_reset_query();
  
        echo json_encode($result);
  
    } else {
        // no posts found
    }
    wp_die();
}