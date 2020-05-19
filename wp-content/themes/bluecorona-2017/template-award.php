<?php
/**
 * Template Name: Award Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>
<?php if(!is_page(array(12827, 12776))){ ?>
<?php if( !get_field('hide_free_analysis_form') ){ ?>	
<div class="right-form-dev">
<div class="free-analysis" id="free-analysis"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
<?php } ?>
<?php } ?>

<div id="sub-container">
   <div class="sub-title-container">
      <?php if( get_field('header_image') ){ ?>	
      <img src=" <?php the_field('header_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/award-subpage-header-image.jpg" alt="about"/>
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
				  <div class="meet-team">
<div id="team-slide" class="single-faq-head re_ad">
<!--<h3>
<span>READ MORE</span>
</h3>-->
</div>
</div>
<div class="award-page-hidden-content"><?php the_field('award_page_content'); ?></div>
				  <?php if(!is_page(12827)){ ?>
				  
				  
<div class="form-after-content"><?php the_field('content_after_form'); ?></div>
					<?php } ?>
				  
               </div>
			   <?php if(!is_page(12827)){ ?>
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
			   } }
                  ?>
            </div>
         </div>
      </div>
   </div>
 

		
   <!-- S:Free Stuff -->
   <?php// include('free-stuff.php')?>
   <!-- E:Free Stuff -->
   <?php if(!is_page(array(12827, 12776))){ ?>
   <?php if( !get_field('hide_free_analysis_form') ){ ?>
   <div class="analysis-sec subpage-form" id="scroll-form">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>
   <?php } ?>
   <?php } ?>
</div>

<div class="partner-logo-sec">
	<div class="content-center">
		<ul>
		<?php if(get_field('add_partner_logo', 10)): ?> 
            <?php while(has_sub_field('add_partner_logo', 10)): ?> 
			<li>
			<?php if(get_sub_field('logo_link', 10)){ ?>
			<a href="<?php the_sub_field('logo_link', 10); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>
			<?php } else{ ?>
			<img src="<?php the_sub_field('logo_image', 10); ?>">
			<?php } ?>
			</li>
			<?php endwhile; ?>  
            <?php endif; ?>
			
		</ul>
	</div>
</div>
<?php get_footer(); ?>