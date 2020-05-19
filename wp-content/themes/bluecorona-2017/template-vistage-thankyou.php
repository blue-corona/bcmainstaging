<?php
/**
* Template Name: Vistage-thankyou
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
              <h1><?php the_title(); ?></h1>
					<div class="vistage-thanku-desktop">
				  <?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				  <?php endwhile;?>
				  
				 </div>
				 
				  <!--download column start here-->
				  <div class="download-resource-row">
				   <h2><?php the_field('resources_title');?></h2>
				    <ul>
				  
				  <?php if( have_rows('downloadable_resources') ):  ?>
  <?php  while ( have_rows('downloadable_resources') ) : the_row(); ?>
							<li><div class="dwn-resource-img"><img src="<?php  the_sub_field('resources_image');?>" alt=""/></div>
							<a class="pink-button" href="<?php  the_sub_field('button_link');?>" target="_blank">Download</a>
                            <?php  endwhile;?></li> 
             <?php endif;?>
			 </ul>
			 </div>
			  <!--download column end here-->
			  <div class="vistage-thanku-mobile">
				  <?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				  <?php endwhile;?>
				  
				 </div>
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
		<h3>Featured in</h3>
		<ul>
		<?php if(get_field('add_partner_logo', 14616)): ?> 
            <?php while(has_sub_field('add_partner_logo', 14616)): ?> 
			<li>
			<?php if(get_sub_field('logo_link', 14616)){ ?>
			<a href="<?php the_sub_field('logo_link', 14616); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>
			<?php } else{ ?>
			<img src="<?php the_sub_field('logo_image', 14616); ?>">
			<?php } ?>
			</li>
			<?php endwhile; ?>  
            <?php endif; ?>
			
		</ul>
	</div>
</div>
<?php get_footer(); ?>