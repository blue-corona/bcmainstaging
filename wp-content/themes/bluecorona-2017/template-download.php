<?php
/**
 * Template Name: Download Form Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>
<div class="right-form-dev">
<div class="free-analysis" id="free-analysis"><a href="#scroll-form" class="scroll-dowm">Free Analysis</a></div>

</div>
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
<div class="pagination-container">
<div class="content-center">

<h1>Free Marketing Resources & Downloads</h1>
  
</div>
</div>


<div class="sub-inner free-icon-container">
	
		
	
  <div class="content-center">
    <div class="columns-1" id="content-columns">
    <div class="sub-inner-content">
	<div id="print-doc">


<h2><?php the_title(); ?></h2>
  <?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					

				<?php endwhile; // end of the loop. ?>
				<?php include('get-in-touch.php')?>
 </div>
<div class="columns-1" id="case-study-form">
 <?php if(get_field('download_form')): ?>

   <?php while(has_sub_field('download_form')): ?>
   <div class="download_form-inner border-top">

    <div class="download_form-con"><?php the_sub_field('form_content'); ?></div>
<div class="case-study-img">
<img src="<?php the_sub_field('image'); ?>"/>
</div>
<div class="study-form-area">
<?php the_sub_field('form_shortcode'); ?>
</div>
</div>

   <?php endwhile; ?>

   <?php endif; ?>
</div>

</div> 
  </div>
    </div>
</div>

 <!-- S:Free Stuff -->
  <?php// include('free-stuff.php')?>
    <!-- E:Free Stuff -->
<div class="analysis-sec subpage-form" id="scroll-form">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>

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