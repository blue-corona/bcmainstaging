<?php
/**
* Template Name: Vistage-Demo
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

<div id="sub-container " class="vistage-subpage">
   <div class="sub-title-container">
   <div class="content-center">
   <?php if (have_rows( 'banner_overlay_content' ) ) : 
	while(have_rows('banner_overlay_content') ) : the_row();?>
    <div class="testimonials-new-content">
	<?php $text =  get_sub_field('add_content') ?>
	
		<?php  echo get_sub_field('add_content') ;?>
	<span>- <?php the_sub_field('add_location');?></span>
	<strong><?php the_sub_field('add_place');?></strong>
	</div>
	<?php endwhile;
	endif;?>
</div>
      <?php if( get_field('banner_image') ){ ?>	
      <img src=" <?php the_field('banner_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/vistage-subpage-banner.jpg" alt="vistage"/>
      <?php } ?>
   </div>
  
   <div class="sub-inner free-icon-container">
      
      <div class="content-center">
         <div class="columns-1" id="content-columns">
            <div class="sub-inner-content">
               
             
               <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  
                  	the_post_thumbnail();
                  
                  } 
                  
                  ?>
               <div id="print-doc-new">
			  
			   <div class="vistage-right">
			 
					<div class="vistage-sidebar-form">
                <div class="schedule-title" id="schedule-title-scroll">Schedule a workshop by completing the form below:</div>
                <h3 class="divaligncenter">VISTAGE CHAIR - WORKSHOP INQUIRY</h3>
					
					<div class="contact-form sub-content-form">
					<?php if(is_page(14575)){ ?>
						<?php echo do_shortcode('[gravityform id="82" title="false" description="false" tabindex="7"]'); ?>	
						<?php } else{ ?>
						<?php echo do_shortcode('[gravityform id="69" title="false" description="false" tabindex="7"]'); ?>
						<?php } ?>						
					</div>
					</div>
					</div>
					
					 <div class="vistage-left">
				  <h1><?php the_title(); ?></h1>
				  <?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				  <?php endwhile;?>
			   </div>
				
               </div>
            </div>
         </div>
      </div>
	  	<div class="speaker-biography-sec">
	  	<div class="content-center">
						<div class="biography-content">
							<h2>Speaker Biography</h2>
						<?php the_field('speaker_content') ;?>
							<div class="center-btn"><a href="#schedule-title-scroll"class="book-btn">Book Ben Now</a></div>
						</div>
						<div class="biography-img-sec">
							<div class="biography-img"><img src="<?php the_field('speaker_image') ;?>" alt=""/></div>
							<h3><?php the_field('speaker_name') ;?></h3>
							<span><?php the_field('speaker_designation') ;?></span>
						</div>
					</div>
					</div>
					<div class="testimonials-new-sec">
<img src="<?php the_field('testimonial_bg_image') ;?>" alt=""/>
	<div class="content-center">
	 <?php if (have_rows( 'vistage_testimonials' ) ) : 
	while(have_rows('vistage_testimonials') ) : the_row();?>
		<div class="testimonials-new-content">
		<?php $text1 = get_sub_field('vistage_content'); ?>
		<p>“<?php echo wp_trim_words( $text1, 40);?>”</p>
	<span>- <?php the_sub_field('vistage_name');?></span>
	</div>
<?php endwhile;
endif;?>
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
		<h3>Featured in</h3>
		<ul>
		<?php if(get_field('add_partner_logo')): ?> 
            <?php while(has_sub_field('add_partner_logo')): ?> 
			<li>
			<?php if(get_sub_field('logo_link')){ ?>
			<a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>
			<?php } else{ ?>
			<img src="<?php the_sub_field('logo_image'); ?>">
			<?php } ?>
			</li>
			<?php endwhile; ?>  
            <?php endif; ?>
			
		</ul>
	</div>
</div>
<?php get_footer(); ?>