<?php

/**

 * Template Name: Resource Template

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
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>
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

   <div class="sub-inner resource-section">
<div class="content-center">
<div id="resource-columns" class="columns-1">
<div class="sub-inner-content">
   <div class="text-center page-heading-sec">
   <div class="purple-txt  page-heading">Resources</div> 
   <div class="page-sub-heading"><p>Browse our wealth of resources to help your business grow faster.</p></div>
   </div>
   <div class="panel-section">
   <div class="row-col">
   <div class="text-center panel-columns col-sx-12 col-lg-4">
   <div class="purple-txt  panel-heading">Free Analysis</div> 
   <i class="panel-icon"></i>
   <a class="btn" href="#">free analysis</a>
   </div>
      <div class="text-center panel-columns col-sx-12 col-lg-4">
   <div class="purple-txt  panel-heading">Blog</div> 
   <i class="panel-icon"></i>
   <a class="btn" href="#">View Blog</a>
   </div>
      <div class="text-center panel-columns col-sx-12 col-lg-4">
   <div class="purple-txt  panel-heading">Faq</div> 
   <i class="panel-icon"></i>
   <a class="btn" href="#">View Faq</a>
   </div>
      <div class="text-center panel-columns col-sx-12 col-lg-4">
   <div class="purple-txt  panel-heading">Webinars</div> 
   <i class="panel-icon"></i>
   <a class="btn" href="#">View Webinars</a>
   </div>
      <div class="text-center panel-columns col-sx-12 col-lg-4">
   <div class="purple-txt  panel-heading">Free Downloads</div> 
   <i class="panel-icon"></i>
   <a class="btn" href="#">Free Downloads</a>
   </div>
      <div class="text-center panel-columns col-sx-12 col-lg-4">
   <div class="purple-txt  panel-heading">Marketing Terms</div> 
   <i class="panel-icon"></i>
   <a class="btn" href="#">view terms</a> 
   </div>
   </div>  
   </div>  
          </div>
         </div>
      </div>
   </div>  
   <div class="feature-blog-section">
   <div class="content-center">
	   <div class="text-center page-heading-sec">
   <div class="purple-txt  page-heading">Featured Blogs</div> 
   
   </div>
           <?php 
				$counter = 0;
               $args = array('post_type' => 'post', 'posts_per_page' => 10, 'order' => 'DESC');

                  $query = new WP_Query( $args );

                  if($query->have_posts()):

               while($query->have_posts()): $query->the_post();
				if($counter%2 == 0){
					?><div class="col-row container-table feature-row	"><?php
				}               ?>
   <div class="column-cell ">
   <div class="feature-column">
   			<?php  $feture_img = wp_get_attachment_image_src(get_field('post_paga_image'), 'feture-img'); ?>

			<?php if($feture_img): ?>
			<div class="feture-img">
						   <a href="<?php the_permalink(); ?>">
							<img src="<?php echo $feture_img[0]; ?>" alt="feature image"/>
						   </a>
			 </div>
						   <?php endif; ?>
   
               <div class="blog-time"><?php the_time('m.d.y'); ?></div>

               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

               <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>

               <div class="blog-link"><a href="<?php the_permalink(); ?>">Read More</a></div>
   </div>
   </div>
   <?php
   if($counter%2 != 0){
					?></div><?php
				}               ?>
        <?php	$counter++;
		endwhile;

               endif;

               wp_reset_postdata();

               ?>
  
   
   </div>

   </div>

<div class="register-section">
<div class="overlay-banner"> 
<div class="content-center">
<div class="banner-heading">Want to learn more?  </div>
<div class="banner-sub-heading">Register for one of our monthly webinars.</div>
<div class="banner-btn"><a href="#">sign up</a></div>
</div>
</div>

</div>   
   
 
   

   <div class="footer-form-section gravity-form">
	<div class="content-center">
	<div class="form-center"> 
		<div class="icon"></div>
	   <div class="form-heading"><span class="form-icon"></span> Get Started Today</div>
	   <?php echo do_shortcode('[gravityform id="58" title="false" description="false" tabindex="234"]'); ?>
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