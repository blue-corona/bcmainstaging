<?php
   /**
   
    * Template Name: Team Template
   
    *
   
    * Description: A Page Template that adds a sidebar to pages.
   
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
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/team-page-banner.jpg" alt="about"/>
      <?php } ?>
   </div>
   <div class="breadcrumb-container">
      <?php include('breadcrumb-section.php')?>
   </div>
   <div class="sub-inner cf free-icon-container sub-page-heading">
      <div class="content-center">
         <div class="sub-inner-content meet-team">
            <h1>Meet the team</h1>
            <p><?php the_field('team_content'); ?></p>
            <h2>Blue Corona Executive Team</h2>
            <p> </p>
            <div id="team-conatiner">
               <div class="columns-block columns-1 people-list">
                  <ul class="team-block-sec">
                     <?php $cnt = 1; ?> 
                     <?php 
                        $args = array('post_type' => 'ourteam', 'posts_per_page' => -1, 'order' => 'DESC',
                        'team_type' => 'Executive'
                        
                        );
                        
                           $query = new WP_Query( $args );
                        
                           if($query->have_posts()):
                        
                        while($query->have_posts()): $query->the_post();
                        
                        ?>
                     <li class="person <?php if(!get_field('team_knowledge') && !get_field('team_content')){ ?>no-active<?php }else{ ?>main-active <?php } ?>">
                        <div class="portfolio-columns columns-3 team-portfolio">
                           <div class="columns-feture-img">
                              <?php  $team_image = wp_get_attachment_url( get_post_thumbnail_id($query->ID) ); ?>
                              <!--img src="<?php //echo $team_image; ?>"/-->
                              <div class="team-img-block" style="background-image:url('<?php echo $team_image; ?>'); "><img src="<?php bloginfo('template_directory'); ?>/images/team-placeholder.jpg"/></div>
                              <div class="portfolio-overlay">
                                 <div class="portfolio-overlay-inner">
                                    <div class="name"><?php the_title(); ?> <span><?php echo $cnt; ?></span></div>
                                    <div class="columns-lnk link-plus ">
                                       <div id="contentPlaceholder_C003_rptPeople_pnlBiography_<?php echo $cnt; ?>">
                                          <span class="info-button"><?php the_title(); ?><br><span><?php the_field('designation'); ?></span></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <?php
                        $cnt++;
                        
                           endwhile;
                        
                              endif;
                        
                              wp_reset_postdata();
                        
                              ?>
                  </ul>
                  <div class="blue-divider"></div>
                  <ul class="team-block-sec">
                     <?php $cnt = 1; ?> 
                     <?php 
                        $args = array('post_type' => 'ourteam', 'posts_per_page' => -1, 'order' => 'ASC',
                        'orderby'			=> 'meta_value',
                        'meta_key'			=> 'last_name',
                        
                        'tax_query'      => array(
                             array(
                                 'taxonomy' => 'team_type',
                                'terms' => 'executive', // My Taxonomy Term that I wanted to exclude
                                 'field' => 'slug', // Whether I am passing term Slug or term ID
                                 'operator' => 'NOT IN',
                             )
                         ),
                        'suppress_filters' => true
                        
                        );
                        
                           $query = new WP_Query( $args );
                        
                           if($query->have_posts()):
                        
                        while($query->have_posts()): $query->the_post();
                        
                        ?>
                     <li class="person <?php if(!get_field('team_knowledge') && !get_field('team_content')){ ?>no-active<?php }else{ ?>main-active <?php } ?>">
                        <div class="portfolio-columns columns-3 team-portfolio">
                           <div class="columns-feture-img">
                              <?php  $team_image = wp_get_attachment_url( get_post_thumbnail_id($query->ID) ); ?>
                              <!--img src="<?php //echo $team_image; ?>"/-->
                              <div class="team-img-block" style="background-image:url('<?php echo $team_image; ?>'); "><img src="<?php bloginfo('template_directory'); ?>/images/team-placeholder.jpg"/></div>
                              <div class="portfolio-overlay">
                                 <div class="portfolio-overlay-inner">
                                    <div class="name"><?php the_title(); ?> <span><?php echo $cnt; ?></span></div>
                                    <div class="columns-lnk link-plus ">
                                       <div id="contentPlaceholder_C003_rptPeople_pnlBiography_<?php echo $cnt; ?>">
                                          <span class="info-button"><?php the_title(); ?><br><span><?php the_field('designation'); ?></span></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <?php
                        $cnt++;
                        
                           endwhile;
                        
                              endif;
                        
                              wp_reset_postdata();
                        
                              ?>
                  </ul>
               </div>
               <div id="bioTemplate" class="hide">
                  <div>
                     <div class="bio-scroll-frame scroll-pane1">
                        <div class="bio">
                           <div class="bio-text"></div>
                        </div>
                        <div class="close-button"></div>
                     </div>
                  </div>
               </div>
            </div>
            <?php include('get-in-touch.php')?>
         </div>
      </div>
   </div>
   <?php// include('free-stuff.php')?>
   <div class="team-section">
      <div class="overlay-banner">
         <div class="content-center">
            <div class="banner-heading">Join our team </div>
            <div class="banner-sub-heading">Think you’ve got what it takes and the experience to match?</div>
            <div class="banner-btn"><a href="<?php echo get_site_url(); ?>/careers">view open positions</a></div>
         </div>
      </div>
   </div>
</div>
<script>
   jQuery(document).ready(function() {
   jQuery('.single-faq-content').hide();
   	jQuery('#team-slide h3 span').click(function (event) {
   event.preventDefault();
   jQuerythis = jQuery(this);
    jQuery('.single-faq-content').slideToggle('slow');
   jQuerythis.text(jQuerythis.text() == 'Read Less' ? 'Read more' : 'Read Less');
   });
   });
      
   
</script>
<style>
   .biography{display: none;}
   .biography.active{display: block;}
</style>
<?php get_footer(); ?>

