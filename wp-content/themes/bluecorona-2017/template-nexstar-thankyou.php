<?php
/**
* Template Name: Nexstar Thank You Template
*
* Description: A Page Template that adds a sidebar to pages.
*
* @package WordPress
* @subpackage Bluecorona_2015
* @since Bluecorona 2015 1.0
*/
get_header(); ?>

<div class="chief-thanku">
  <div class="thanku-banner">
   <div class="banner-wrapper">
   <?php if (have_rows( 'banner_overlay_content' ) ) : 
	while(have_rows('banner_overlay_content') ) : the_row();?>
    <div class="testimonials-new-content">
	<?php $text =  get_sub_field('add_content') ?>
	
		<?php  echo get_sub_field('add_content') ;?>
	</div>
	<div class="chief-outsiders-logo bto-logo"><a href="#"><img src="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2017/09/nexstar-network-strategic-partner.png" alt=""/></a>
					</div>
	<?php endwhile;
	endif;?>
</div>
      <?php if( get_field('banner_image') ){ ?>	
      <div class="thankyou-banner">
	  <style>
	  .thankyou-banner{ background:url('<?php the_field('banner_image'); ?>')}
	  </style>
	  </div>
      <?php }else{ ?>	
	  <div class="thankyou-banner">
     
	  
	  <style>
	  .thankyou-banner{ background:url('<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg')}
	  </style>
	  </div>
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
             <h1><?php the_title(); ?></h1>
			 <div class="desktop-thanku-content">
				  <?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				  <?php endwhile;?>
				  </div>
					<div class="thanku-bottom-content">
				  <h2><?php the_field('competitive_title');?></h2>
				  
					
					<div class="thanku-bottom-right">
						<div class="digital-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/images/digital-img1.png" alt=""/></div>
						<a class="pink-button" target="_blank" href="<?php the_field('add_pdf_file',14734);?>">FREE DOWNLOAD</a>
					</div>
					<div class="thanku-bottom-left">
						<?php the_field('competitive_content');?>
					</div>
				  </div>
				  <div class="mobile-thanku-content">
				  <?php while( have_posts() ) : the_post();?>
					<?php the_content();?>
				  <?php endwhile;?>
				  </div>
            </div>
         </div>
      </div>
	  	

   </div>

</div>
<div class="partner-logo-sec">
	<div class="content-center">
		
		<ul>
		<?php if(get_field('add_partner_logo',10)): ?> 
            <?php while(has_sub_field('add_partner_logo',10)): ?> 
			<li>
			<?php if(get_sub_field('logo_link',10)){ ?>
			<a href="<?php the_sub_field('logo_link',10); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>
			<?php } else{ ?>
			<img src="<?php the_sub_field('logo_image',10); ?>">
			<?php } ?>
			</li>
			<?php endwhile; ?>  
            <?php endif; ?>
			
		</ul>
	</div>
</div>

<?php get_footer(); ?>