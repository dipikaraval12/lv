

<?php
 get_header();

$blog_posts = new WP_Query( 
    array( 'post_type' => 'post', 
    'post_status'' => 'publish', 
    'posts_per_page' => -1 ) );
    
    
get_footer();

?>