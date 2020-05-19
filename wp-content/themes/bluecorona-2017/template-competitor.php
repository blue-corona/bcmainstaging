<?php

/**

* Template Name: Competitor Template

*

* Description: A Page Template that adds a sidebar to pages.

*

* @package WordPress

* @subpackage Bluecorona_2015

* @since Bluecorona 2015 1.0

*/



get_header(); ?>

<div id="sub-container" style="margin: 8px 0 0;">
   <div class="sub-title-container">
      <?php if( get_field('header_image') ){ ?>	
      <img src=" <?php the_field('header_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
      <?php } ?>
   </div>
   
   <div class="sub-inner free-icon-container">
     
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
		 
		  <?php the_field('extra_content'); ?>
               </div>
              
               <?php the_field('sub_content'); ?>
               <?php if(get_field('add_service_area')){ ?>
               <div class="service-block border-top">
                  <div class="service-inner">
                     <div class="heading lit-blue-txt hr-line wow fadeInDown uppercase animated" >industries we serve</div>
                     <div class="single-faq-wrap  wow fadeInDown">
                        <div class="single-faq-head">
                           <h3>Include but are not limited to:</h3>
                        </div>
                        <div class="single-faq-content">
                           <?php the_field('service_block'); ?>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <?php
                  if ( !wp_is_mobile() ) {
                  	echo do_shortcode('[city_state]');
                  }
                  ?>
            </div>
         </div>
      </div>
   </div>
  
</div>

<?php get_footer(); ?>