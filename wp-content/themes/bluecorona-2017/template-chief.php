<?php
/**
* Template Name: Chief Template
*
* Description: A Page Template that adds a sidebar to pages.
*
* @package WordPress
* @subpackage Bluecorona_2015
* @since Bluecorona 2015 1.0
*/
get_header(); ?>

<div id="sub-container " class="vistage-subpage">
   <div class="sub-title-container">
   <div class="content-center">
   <?php if (have_rows( 'banner_overlay_content' ) ) : 
	while(have_rows('banner_overlay_content') ) : the_row();?>
    <div class="testimonials-new-content">
	<?php $text =  get_sub_field('add_content') ?>
	
		<?php  echo get_sub_field('add_content') ;?>
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
  
   <div class="sub-inner">
      
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
					<div class="chief-outsiders-logo"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/chief-outsiders-logo.png" alt=""/></a>
					</div>
					<div class="vistage-sidebar-form">
                <div class="schedule-title" id="schedule-title-scroll">Request a digital competitive analysis below:</div>
                <h3 class="divaligncenter">DIGITAL COMPETITIVE ANALYSIS INQUIRY</h3>
					
					<div class="contact-form sub-content-form">
					
						<?php echo do_shortcode('[gravityform id="84" title="false" description="false" tabindex="7"]'); ?>
											
					</div>
					</div>
					<div class="g-partner-logo g-partner-logo-desktop">
						<ul>
							<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo-2.png" alt=""/></a></li>
							<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo5-1.png" alt=""/></a></li>
						</ul>
					</div>
					</div>
					
					<div class="vistage-left">
				  <h1><?php the_title(); ?></h1>
				  <?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				  <?php endwhile;?>
				  
				  <div class="g-partner-logo g-partner-logo-mobile">
						<ul>
							<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo-2.png" alt=""/></a></li>
							<li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo5-1.png" alt=""/></a></li>
						</ul>
					</div>
			   </div>
               </div>
            </div>
         </div>
      </div>
	  	
					<div class="testimonials-new-sec competitive-sec">
<img src="<?php the_field('testimonial_bg_image') ;?>" alt=""/>
	<div class="content-center">
	 <?php if (have_rows( 'vistage_testimonials' ) ) : 
	while(have_rows('vistage_testimonials') ) : the_row();?>
		<div class="testimonials-new-content">
		<?php $text1 = get_sub_field('vistage_content'); ?>
		<div class="competitive-text"><?php echo wp_trim_words( $text1, 40);?></div>
		<div class="center-btn"><a href="#schedule-title-scroll" class="book-btn">Request today</a></div>
	</div>
<?php endwhile;
endif;?>
	</div>
</div>
   </div>

</div>


<?php get_footer(); ?>