<?php 

/*------------------------------------------
    Register Custom Post Types
    
    To create a new post type. Duplicate "/custom-post-types/custom-post-type-template.php" 
    and rename it to the post type name you want along with updating the "$cptName" variable in the file.
    
    Then add the below line to the function below with the updated name.
    require get_template_directory().'/_includes/wp/custom-post-types/cpt-name.php';
    
    To update any attributes. You will update the CPT file in "custom=post-types."
    
------------------------------------------*/
function register_custom_post_types() {    
    
    $framworkName;
    
    require get_template_directory().'/_includes/wp/custom-post-types/faq.php';
    require get_template_directory().'/_includes/wp/custom-post-types/team-members.php';
}
add_action( 'init', 'register_custom_post_types' );

