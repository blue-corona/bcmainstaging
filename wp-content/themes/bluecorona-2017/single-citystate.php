<?php

/**

 * Template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

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

      

     

   </div>

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

			    

              

                  <?php 

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

	the_post_thumbnail();

} 

?>

                 

              

               <div id="print-doc">

                  <div class="print-image">

                     <?php 

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

	the_post_thumbnail();

} 

?>

                  </div>

                  <?php while ( have_posts() ) : the_post(); ?>

                  <?php the_content(); ?>

                  <?php endwhile; // end of the loop. ?>

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

			   <?php if(get_field('add_service_area')){ ?>

			   <div class="service-block border-top">

				   <div class="service-inner">

				   <div class="heading lit-blue-txt hr-line wow fadeInDown uppercase animated" >industries we serve</div>

				   <div class="single-faq-wrap  wow fadeInDown">

					

					<div class="single-faq-head"><h3>Include but are not limited to:</h3></div>

					<div class="single-faq-content">

					 <?php the_field('service_block'); ?>

					</div>

				</div>

				   </div>

			   </div>

			   <?php } ?>
<?php include('get-in-touch.php')?>
            </div>

         </div>

      </div>

   </div>

   <!-- S:Free Stuff -->

 

   <!-- E:Free Stuff -->
<div class="analysis-sec">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>
</div>

<?php get_footer(); ?>