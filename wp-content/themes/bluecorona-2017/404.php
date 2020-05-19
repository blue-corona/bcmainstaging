<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>

	
<div id="sub-container"> 
<div class="sub-title-container">
 <?php if( get_field('header_image') ){ ?>	
  
   <img src=" <?php the_field('header_image'); ?>" alt=""/>
   <?php }else{ ?>	
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
   <?php } ?>
</div></div>
<div class="breadcrumb-container">
      <?php include('breadcrumb-section.php')?>
   </div>
<div class="sub-inner free-icon-container">
	<div class="free-stuff-icon wow bounceInDown">
			<div class="arrow-link-in free-stuff-icon-inner">
				<a href="#free-stuff">
					<div class="down-arrow">
						<span class="left"></span>
                        <span class="center"></span>
						<span class="right"></span>
					</div>
				</a>
			</div>
		</div>
  <div class="content-center">
    <div class="columns-1" id="content-columns">
    <div class="sub-inner-content">
	 <?php include('get-in-touch.php')?>
  <h1>Missing Page</h1>

<p>Oops! We can’t find the page you are looking for.
Try using the Site Search bar in the top right to find the page you are looking for!</p>
 
<div class="testimonial-block">
<div  class="testimonial">
<?php 
   $args = array('post_type' => 'testimonials', 'posts_per_page' => 1, 'order' => 'ASC','orderby' => 'rand',);
      $query = new WP_Query( $args );
      if($query->have_posts()):
   while($query->have_posts()): $query->the_post();
   ?>
<p>“<?php echo get_the_excerpt(); ?>”</p>
<div class="testimonial-bottom">
<div class="pull-left testimonial-link link"><a href="<?php echo get_the_permalink(260); ?>">Read More</a></div>
<div class="quote-name pull-right"> - <?php the_title(); ?>  <br><?php the_field('designation'); ?> </div>
</div>
<?php	endwhile;
   endif;
   wp_reset_postdata();
   ?>
</div>
</div>

<?php the_field('sub_content'); ?>

</div> 
  </div>
    </div>
</div>

 <!-- S:Free Stuff -->
  <?php include('free-stuff.php')?>
    <!-- E:Free Stuff -->


</div>

<?php get_footer(); ?>