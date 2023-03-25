<?php

function load_scripts(){
	/** Adds style.css **/
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'aoscss', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, false );

    if (!is_admin()) {
	  wp_deregister_script('jquery');
	  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);
   }
    wp_enqueue_script( 'bootstrapjs','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), null, false );
    wp_enqueue_script( 'aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array( 'jquery' ), null, false );

    wp_enqueue_script( 'scrollmagic','//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array( 'jquery' ), null, false );
	wp_enqueue_script( 'scrollmagicind', get_template_directory_uri() . '/assets/js/vendor/debug.addIndicators.js', array( 'jquery' ), null, false );
	wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/assets/js/vendor/jquery.ScrollMagic.js', array( 'jquery' ), null, false );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, false );

}

// loads scripts on website
add_action( 'wp_enqueue_scripts', 'load_scripts', 999 );
/*add_action( 'wp_print_scripts', 'wsds_detect_enqueued_scripts' );
function wsds_detect_enqueued_scripts() {
	global $wp_scripts;
	foreach( $wp_scripts->queue as $handle ) :
		echo $handle . ' | ';
	endforeach;
}*/

add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3);
function wsds_defer_scripts( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'bootstrapjs',
		'aosjs',
		'scrollmagic',
		'scrollmagicind',
		'main-js'
	);

	if ( in_array( $handle, $defer_scripts ) ) {
		return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	
	return $tag;
} 

// loads scripts in block editor
add_action( 'enqueue_block_editor_assets', 'load_scripts', 999 );

// acf google maps api
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyCMOhK29e_ERdK2JvFTA3VWCxPmUB8kZm8');
}
add_action('acf/init', 'my_acf_init');