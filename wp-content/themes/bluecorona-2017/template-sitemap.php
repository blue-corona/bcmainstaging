<?php
/**
 * Template Name: Sitemap Template
 *
 * Description: A Page Template that adds a sidebar to pages.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>
<div id="sub-container" class="sitemap-page">
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
               
              
			   <h2>Page</h2>
           
  <?php wp_nav_menu( array( 'menu' => 'Header Menu New' ) ); ?>

	  

<?php include('get-in-touch.php')?>
              
            </div>
         </div>
      </div>
   </div>
   <!-- S:Free Stuff -->
   <?php// include('free-stuff.php')?>
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

<style>

</style>
<?php get_footer(); ?>