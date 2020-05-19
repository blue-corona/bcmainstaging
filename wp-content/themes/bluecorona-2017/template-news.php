<?php
/**
 * Template Name: News Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>



 
<div id="sub-container"> 
<div class="sub-title-container"><?php if( get_field('header_image') ){ ?>	
  
   <img src=" <?php the_field('header_image'); ?>" alt=""/>
   <?php }else{ ?>	
  <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
   <?php } ?></div>
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
  <h1><?php the_title(); ?></h1>
  
  <div id="print-doc">

  <div class="print-image">
   <?php
						
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail(get_the_id(), 'full', array());
					} else{?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/img.jpg" alt="img"/>
						<?php }		?>
						</div>
  <?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

			

				<?php endwhile; // end of the loop. ?>
				<?php
   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   
   query_posts(array(
   	'post_type'      => 'news', // You can add a custom post type if you like
   	'paged'          => $paged,
   	'posts_per_page' => -1
   ));
   
   if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="new-block">
   
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-link drk-txt cf"><?php the_time('F j, Y'); ?></div>
      <p><?php echo wp_trim_words(get_the_content(), 19); ?></p>
   
   <div class="pst-lnk link"><a href="<?php the_permalink(); ?>">Read More</a></div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<div class="my_pagination"><?php my_pagination(); ?></div>
				</div>
 
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
<?php include('get-in-touch.php')?> 
</div> 
  </div>
    </div>
</div>

 <!-- S:Free Stuff -->
  <?php// include('free-stuff.php')?>
    <!-- E:Free Stuff --><div class="analysis-sec">		<div class="content-center">			<div class="large-title">GET A FREE ANALYSIS</div>			<div class="mediam-title">Enter  your website url below:</div>			<div class="gravity-form-website">			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>		</div>		</div></div>


</div>

<?php get_footer(); ?>