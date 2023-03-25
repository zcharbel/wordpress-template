<?php  

function change_and_link_excerpt( $more ) {
	if ( is_admin() ) {
		return $more;
	}
	
	// Change text, make it link, and return change
	return '... <a href="' . get_the_permalink() . '">Read More</a>';
}

add_filter( 'excerpt_more', 'change_and_link_excerpt' );