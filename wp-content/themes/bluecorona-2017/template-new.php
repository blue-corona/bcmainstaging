<?php
/**
 * Template Name: New Template
 *
 * Description: A Page Template that adds a sidebar to pages.
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
     
      <div class="content-center">
         <div class="columns-1" id="content-columns">
            <div class="sub-inner-content new-referral-form-page">
	
			<div id="content-group">
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
               
               <?php the_field('sub_content'); ?>
			   </div>
			   
				<div id="sidebar-group">
					<div id="subform-group" class="new-referral-form">
						<div class="gform_heading"><h3 class="gform_title">Referral Form</h3></div>
						<?php echo do_shortcode('[gravityform id="46" title="false" description="false" ajax="true"]'); ?>
					</div>
				</div>
			 
			
            </div>
         </div>
      </div>
   </div>
   
</div>
<?php get_footer(); ?>