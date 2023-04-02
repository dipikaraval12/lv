`<?php /* Template Name: portfolio Template */ ?>
  
<?php get_header(); 


?>
    <section>
    
<!-- portfolio -->
    <div id="portfolio">
        <div class="container5">
            <div class="content3" >
                <h2>my work</h2>
            </div>
            
            <div class="work-list">
            <?php
// the query
$args = array(
'post_type'=>'gallary',
'post_per_page'=> 10,
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();
    
    $img = get_field('add_image');
    //print_r($img);
    ?>
    
    <div class="work" data-aos="flip-left">
        
    <?php if (!empty($img)){ ?>
                    <img src="<?php echo $img; ?>" alt="" style="height:500px;width:500px;">
                    <?php } ?>
                    
                    <div class="layer">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content();
                      $linku = get_field('web_site_link');
                      if(!empty($linku)){
                        ?>
                        <a href="<?php  echo esc_url($linku);  ?>"><i class="uil uil-external-link-alt"></i></a>
                    <?php }
                    ?>
                    </div>
                    </div>
    <?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
        </div>

    </div>


    <?php get_footer(); ?>

<!-- <div class="col-md-10 offset-md-1">
