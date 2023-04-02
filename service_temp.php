`<?php /* Template Name: Service Template */ ?>
  
<?php get_header(); 


?>
<section>
<div class="name">
    <div class="heading" >
        <h1>
            <span style="opacity: 1; transform: translate(0px, 0px);" class="creative">OUR</span>
            <span style="opacity: 1; transform: translate(0px, 0px);" class="works">SERVICES</span>

        </h1>
    </div>
</div>



<div class="services">
<div class="container5">
<div class="content3">
<h2>my services</h2>
</div>
</div>
</div>
<div class="services-list ">
<?php
// the query
$args = array(
'post_type'=>'post',

'post_per_page'=> 10,
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div data-aos="flip-left">
                        <i class="uil uil-arrow"></i>
                        <h2><?php the_title(); ?></h2>
                       <?php the_content(); ?>
                        <a href="<?php the_permalink(); ?>">Learn more</a>
                    </div>
		
        <!-- <p><?php// the_content(); ?></p> -->
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
                   
                    
                </div>

            </div>
        </div>


<?php get_footer(); ?>

<!-- <div class="col-md-10 offset-md-1">
