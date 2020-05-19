<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

get_header(); ?>

<div id="sub-container">
   <div class="sub-title-container">
      <?php if( get_field('header_image') ){ ?>	
      <img src=" <?php the_field('header_image'); ?>" alt=""/>
      <?php }else{ ?>	
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/seo-baneer.jpg" alt="about"/>
      <?php } ?>
   </div>
   <div class="sub-inner free-icon-container">
      <div class="sub-inner-content">
         <section class="seo-service-topic">
            <div class="content-center">
               <h1><?php echo the_title();?></h1>
               <div class="seo-service-main">
                  <div class="seo-service-topic-left">
                     <?php while ( have_posts() ) : the_post(); ?>
                     <?php the_content(); ?>
                     <?php endwhile; // end of the loop. ?>
                  </div>
                  <div class="seo-service-topic-images text-center">
                     <?php if(get_field('add_partner_image')): ?>                   
                     <?php while(has_sub_field('add_partner_image')): ?>
                     <img class="alignnone size-full" src="<?php the_sub_field('partner_image'); ?>"/>
                     <?php endwhile; ?>  
                     <?php endif; ?>
                  </div>
               </div>
               <?php if(get_field('add_form_shortcode')){ ?>
               <div class="single-content-form single-content-form2 seo-service-topic-form">
                  <?php the_field('add_form_shortcode'); ?>
               </div>
               <?php } ?>
            </div>
         </section>
         <section class="seo-service-local">
            <div class="content-center">
               <h2 class="text-center"><?php the_field('process_heading'); ?></h2>
               <h4 class="text-center custom-sub-head"><?php the_field('process_sub_heading'); ?></h4>
               <div class="service-local-images">
                  <?php if(get_field('add_process_image')): ?>                   
                  <?php while(has_sub_field('add_process_image')): ?>
                  <div class="img-col"><img class="alignnone size-full" src="<?php the_sub_field('process_image'); ?>" alt="" /></div>
                  <?php endwhile; ?>  
                  <?php endif; ?>
               </div>
               <div class="service-local-listing">
                  <div class="left-sec">
                     <?php if(get_field('process_block')):
					 $process_block_count = count(get_field('process_block'));
					 $y = '2';					 
					 $value = $process_block_count / $y;
					 $process_block_count_ds =ceil($value);
					// var_dump(round(3.5));
					//echo $process_block_count_ds;
                        $j=1;
                        ?>                   
                     <?php while(has_sub_field('process_block')): ?>
                     <?php if ($j<=$process_block_count_ds ) { ?>
                     <div class="local-listing-col">
                        <h4><span><?php echo $j; ?></span><?php the_sub_field('process_head'); ?></h4>
                        <?php the_sub_field('process_content'); ?>
                     </div>
                     <?php } ?>
                     <?php 
                        $j++;
                        endwhile; ?>  
                     <?php endif; ?>
                  </div>
                  <div class="right-sec">
                     <?php if(get_field('process_block')): 
                        $j=1;
                        ?>                   
                     <?php while(has_sub_field('process_block')): ?>
                     <?php if ($j>$process_block_count_ds ) { ?>
                     <div class="local-listing-col">
                        <h4><span><?php echo $j; ?></span><?php the_sub_field('process_head'); ?></h4>
                        <?php the_sub_field('process_content'); ?>
                     </div>
                     <?php } ?>
                     <?php 
                        $j++;
                        endwhile; ?>  
                     <?php endif; ?>
					 
                  </div>
				  <div class="hiden-cont"><?php the_field('local_hide_content') ; ?></div>
                  <div class="meet-team"> 
                     <div id="team-slide" class="single-faq-head">
                        <h3> <span>READ MORE</span></h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php if(get_field('add_s_faq_type')){ ?>
            <?php include ('service-faq.php') ;?>
         <?php } ?>
         <section class="seo-case-form-sec">
            <div class="content-center">
               <div class="top-title"><?php the_field( 'editable_head' ) ; ?></div>
               <div class="left-col"><img class="alignnone" src="<?php the_field('case_pdf_image'); ?>" alt="" width="390" height="341" /></div>
               <div class="seo-form-col gravity-form" style="display: block;">
                  <div class="form-heading"><?php the_field( 'editable_sub_head' ) ; ?></div>
                  <?php echo do_shortcode('[gravityform id=73 title=false description=false ajax=true tabindex=9]'); ?>
               </div>
            </div>
         </section>
         <section class="makes-bluecorona">
            <div class="content-center">
               <h2 style="text-align: center;"><?php the_field('different_heading'); ?></h2>
               <?php the_field('different_content'); ?>
               <div class="superior-service">
                  <div class="serve-left"><img src="<?php the_field('different_image'); ?>" /></div>
                  <div class="serve-rght">
                     <?php the_field('different_right_content'); ?>
                  </div>
               </div>
               <!--div class="meet-team">
                  <div id="team-slide1" class="single-faq-head">
                     <h3> <span>READ MORE</span></h3>
                  </div>
               </div-->
            </div>
         </section>
         <section class="seo-service-testimonials">
            <div class="content-center">
               <h2 class="seo-testimonials-title">Our Happy Clients</h2>
               <div class="service-testiminial-inner">
                  <div class="service-testimonial-block">
                     <?php 
                        $args = array('post_type' => 'testimonials', 'posts_per_page' => 10, 'order' => 'ASC',);
                        $query = new WP_Query( $args );
                        if($query->have_posts()):
                        while($query->have_posts()): $query->the_post();
                        ?>
                     <div class="service-testiminial-content">
                        <p>“<?php echo wp_trim_words( get_the_content(), 80, '...' );?>”</p>
                        <div class="testimonal-bottom">
                           <span class="author-name"><?php the_title(); ?>, <span class="Designation"><?php the_field('designation'); ?></span></span>
                           <br>
                           <span class="comp-name"><?php the_field('company_name'); ?></span>
                        </div>
                     </div>
                     <?php	endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                  </div>
               </div>
            </div>
         </section>
		 <?php if (get_field('show_business_work') ) { ?>
         <div class="content-center seo-tab-sec">
            <div id="content-accs" class="wow fadeInDown">
               <h2>See the businesses we work with</h2>
               <div id="demoTab">
                  <ul class="resp-tabs-list">
                     <?php if(get_field('add_businesses')): ?>                   
                     <?php while(has_sub_field('add_businesses')): ?>
                     <li class="resp-tab-item "><span><?php the_sub_field('business_title'); ?></span></li>
                     <?php endwhile; ?>  
                     <?php endif; ?>
                  </ul>
                  <div class="resp-tabs-container">
                     <?php if(get_field('add_businesses')): ?>                   
                     <?php while(has_sub_field('add_businesses')): ?>
                     <div class="resp-tab-content">
                        <div class="mCustomScrollbar _mCS_2">
                           <div class="include-service-content">
                              <?php the_sub_field('business_content'); ?>
                           </div>
                        </div>
                     </div>
                     <?php endwhile; ?>  
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
		 <?php } ?>
        
         <div class="partner-logo-sec">
            <div class="content-center">
               <ul>
               <li style="margin-top:30px;"><script src="https://apis.google.com/js/platform.js" async defer></script> 
<div class="g-partnersbadge" data-agency-id="4021182115"></div></li>
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
      </div>
   </div>
</div>

<?php get_footer(); ?>