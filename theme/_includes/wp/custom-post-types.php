<?php 

/*------------------------------------------
    Register Custom Post Types
------------------------------------------*/
function register_custom_post_types() {    
    require get_template_directory().'/_includes/wp/custom-post-types/faq.php';
    require get_template_directory().'/_includes/wp/custom-post-types/team-members.php';
}
add_action( 'init', 'register_custom_post_types' );

