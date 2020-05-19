<?php
/**
* Template Name: Landing Template
*
* Description: A Page Template that adds a sidebar to pages.
*
* @package WordPress
* @subpackage Bluecorona_2015
* @since Bluecorona 2015 1.0
*/

get_header(); ?>
<div id="sub-container" class="landing ppc1 <?php the_field('add_class'); ?>">
<div class="sub-title-container">
<?php if( get_field('header_image') ){ ?>	

<img src=" <?php the_field('header_image'); ?>" alt=""/>
<?php }else{ ?>	
<img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
<?php } ?>

  <div class="banner-text">
	 <span class="heading-top"><?php the_field('banner_title'); ?></span>
	 <span class="heading-bottom"><?php the_field('banner_sub_title'); ?></span>
  </div>
  
  
 
</div>
<div class="breadcrumb-container">
  <?php include('breadcrumb-section.php')?>
</div>
<div class="sub-inner free-icon-container">
   <div class="content-center">
	 <div class="columns-1" id="content-columns">
		<div class="sub-inner-content">
		<?php //include('get-in-touch.php')?>
		
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
			  <div class="about-accordion">
			  <div id="content-accs">
		<?php if(get_field('accordion')): ?>
		<?php while(has_sub_field('accordion')): ?>
		<h3><?php the_sub_field('accordion_title'); ?></h3>
		<div class="content-acc">
		   <?php the_sub_field('accordion_content'); ?>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	 </div>
	 </div>
		   </div>
		  
		</div>
	 </div>
  </div>
	 <div class="form-center full-width-form">
	 <div class="content-center">
	 <div class="columns-1" id="content-columns">
		<div class="sub-inner-content">
				<div class="form-title"><p>Get a <span>Free</span> Marketing Consultation</p></div>
				<?php echo do_shortcode('[gravityform id="44" title="false" description="false" tabindex="19"]');?>
			 </div>
	 </div>
  </div>
		</div>
			<div class="content-center">
				 <div class="columns-1" id="content-columns">
					<div class="sub-inner-content">
						<div class="meet-bc-team sub-sec">
							<h2>Meet the Blue Corona Team that’s going to help you grow.</h2>
							<div class="bc-team">
								<div class="acm-image"><img src="<?php the_field('image'); ?>"></div>
								<div class="acm-des">
									<h3><?php the_field('designation'); ?></h3>
									<p><?php the_field('description'); ?></p>
								</div>
							</div>
						</div>	
						<div class="support-team sub-sec">	
							<h2>Your Support Team Also Includes…</h2>
							<ul>
							
							 <?php if(get_field('team_support_section')): ?>

   <?php while(has_sub_field('team_support_section')): ?>

     
	 <li><img src="<?php the_sub_field('image'); ?>"><p><?php the_sub_field('position'); ?></p></li>

   <?php endwhile; ?>

   <?php endif; ?>
								
								
							</ul>
						</div>	
						<div class="companies-helped sub-sec">	
							<h2>Companies We’ve Helped</h2>
							<ul>
							
							 <?php if(get_field('add_logo', 9265)): ?>

   <?php while(has_sub_field('add_logo', 9265)): ?>

     
	 <li><img src="<?php the_sub_field('image'); ?>"></li>

   <?php endwhile; ?>

   <?php endif; ?>
								
								
							</ul>
						</div>
						<div class="subhead-here sub-sec">
							
							<?php  echo do_shortcode('[video_lightbox_youtube video_id="'.get_field("video_path").'" width="740" height="415" anchor="'.get_field("video_image").'"]');  ?>
							
						
							<h3><?php the_field('sub_head'); ?></h3>
							<p><?php the_field('small_content'); ?></p>
						</div>
						<div class="marketing-consultation sub-sec">
							<h2>Call Now for a Free Marketing Consultation </h2>
							<?php if(!wp_is_mobile()){ ?>
							<span class="consult-number">800.696.4690</span>
							<?php } ?>
							<?php if(wp_is_mobile()){ ?>
							<span class="consult-number"><a href="tel:<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', '8006964690'); ?>">800.696.4690</a></span>
							
							<?php } ?>
							<ul>
							 <?php if(get_field('add_partner_logo', 9265)): ?>

   <?php while(has_sub_field('add_partner_logo', 9265)): ?>

     
	 <li><img src="<?php the_sub_field('partner_image'); ?>"></li>

   <?php endwhile; ?>

   <?php endif; ?>
								
							</ul>
						</div>
					</div>
				 </div>
			</div>
</div>


</div>
<?php get_footer(); ?>