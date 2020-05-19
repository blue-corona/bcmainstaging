<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
      <?php } ?>
   </div>
  
   <div class="sub-inner free-icon-container">
      
      <div class="content-center">
         <div class="columns-1" id="content-columns">
            <div class="sub-inner-content">
       
           
               <div>
                
				  <?php 
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			<?php if ( have_posts() ) : ?>
       <?php while ( have_posts() ) : the_post() ; ?>
        <div id="post-<?php the_ID();?>" class="post_single">
        <?php if ( is_sticky() ) :?>
         <hgroup>
          <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
          <h3 class="entry-format"><?php _e( 'Featured', 'chapmanheating' ); ?></h3>
         </hgroup>
        <?php else : ?>
         <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <?php endif ;?>
        <div class="date-blog">Posted On: <?php echo get_the_date();?></div>
        <p><?php echo wp_trim_words( get_the_content(), 47);?></p>
		
		
        <a href="<?php the_permalink(); ?>" class="button-default">Read More</a> 
        </div>
       <?php endwhile ; ?>
         <div class="my_pagination"><?php my_pagination(); ?></div>
      <?php endif ; ?>
	  
	  
	  
				  <?php if (is_page(14529) ) { ?>
				  <div class="seo-form">
					<?php echo do_shortcode('[gravityform id="81" title="false" description="false" ajax="false"]'); ?>
				</div>
				  <?php } ?>
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
      <?php $url = $_SERVER["REQUEST_URI"];
         $isIttopseo = strpos($url, '/top-seo-company'); 
         if ($isIttopseo!==false) { 
      ?>
         <?php include ('top-seo-faq.php') ;?>
      <?php } ?>
      <?php $url = $_SERVER["REQUEST_URI"];
         $isItintermar = strpos($url, '/internet-marketing-services'); 
         if ($isItintermar!==false) { 
      ?>
         <?php include ('internet-marketing-faq.php') ;?>
      <?php } ?>
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
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true"]'); ?>
		</div>
		</div>
</div>
   <?php } ?>
   <?php } ?>
   
</div>

<div class="partner-logo-sec ptb-50 m-0">
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