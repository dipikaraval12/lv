<?php /* Template Name: CustomPageT1 */ ?>
  
<?php get_header(); 

while ( have_posts() ) : the_post();


the_content();
endwhile; 

get_footer(); ?>

<!-- <div class="col-md-10 offset-md-1">