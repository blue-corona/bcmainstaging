<?php/*Template Name: Calculate Page*/ 

get_header(); ?><div id="sub-container">   <div class="sub-title-container">      <?php if( get_field('header_image') ){ ?>	      <img src=" <?php the_field('header_image'); ?>" alt=""/>      <?php }else{ ?>	      <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>      <?php } ?>   </div>   <div class="sub-inner free-icon-container">      <div class="content-center">         <div class="columns-1" id="content-columns">            <div class="sub-inner-content">               <h1><?php the_title(); ?></h1>               <?php                   if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.                                    	the_post_thumbnail();                                    }                                     ?>               <div id="print-doc">                  <div class="print-image">                     <?php                         if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.                                                	the_post_thumbnail();                                                }                                                 ?>                  </div>                  <?php while ( have_posts() ) : the_post(); ?>                  <?php the_content(); ?>                  <?php endwhile; // end of the loop. ?>                  <?php $hosting_provider = $_REQUEST['fhosting']?>                  <?php $fname = $_REQUEST['fname']?>                  <?php $hostingpro = $_REQUEST['fhostingpro']?>                  <?php $ecommerce = $_REQUEST['fecommerce']?>                  <?php $ecommerce2 = 'Yes'?>                  <?php $cms = $_REQUEST['fother']?>                  <?php $fcalculate = $_REQUEST['fcalculate']?>                  <?php $fname = $_REQUEST['fname']?>                  <?php $cms2 = 'Other'?>                  <?php $hosting_provider1 = 'No' ?>                    <?php if($cms == $cms2){?>                                   <div class="calculate-message">                     <p>Call for Pricing</p>                  </div>				   <div class="calculate-message-link calculate-message-hide">				  <p><a class="btn" href="<?php the_permalink(13445); ?>">Read More</a></p>                  </div>                  <?php } else if($hostingpro){?>                                    <div class="calculate-message">                     <p>Call for Pricing</p>                  </div>				  <div class="calculate-message-link calculate-message-hide">				  <p><a class="btn" href="<?php the_permalink(13445); ?>">Read More</a></p>                  </div>                  <?php } else if($ecommerce == $ecommerce2){?>                                   <div class="calculate-message">                     <p>Call for Pricing</p>                  </div>				  <div class="calculate-message-link calculate-message-hide">				  <p><a class="btn" href="<?php the_permalink(13445); ?>">Read More</a></p>                  </div>                  <?php } else if($hosting_provider == $hosting_provider1){?>                                   <div class="calculate-message">                     <p>We will contact you shortly to discuss the calculation for your SSL</p>                  </div>				  <div class="calculate-message-link calculate-message-hide">				  <p><a class="btn" href="<?php the_permalink(13445); ?>">Read More</a></p>                  </div>                  <?php } else if($fcalculate){ ?>                                    <div class="calculate-message">                     <p><strong>Calculation:</strong> $<?= $_REQUEST['fcalculate']?></p>                                       </div>				   <div class="calculate-message-link">				 <p><a class="btn" href="<?php the_permalink(13445); ?>">Get Started</a></p>                  </div>                                   <?php } else if($fname) {?>				  <div class="calculate-message">                     <p>Call for Pricing</p>                                       </div>				  <div class="calculate-message-link calculate-message-hide">				  <p><a class="btn" href="<?php the_permalink(13445); ?>">Read More</a></p>                  </div>                  <?php }?>               </div>            </div>         </div>      </div>   </div></div><div class="partner-logo-sec">   <div class="content-center">      <ul>         <?php if(get_field('add_partner_logo', 10)): ?>          <?php while(has_sub_field('add_partner_logo', 10)): ?>          <li>            <?php if(get_sub_field('logo_link', 10)){ ?>            <a href="<?php the_sub_field('logo_link', 10); ?>"><img src="<?php the_sub_field('logo_image', 10); ?>"></a>            <?php } else{ ?>            <img src="<?php the_sub_field('logo_image', 10); ?>">            <?php } ?>         </li>         <?php endwhile; ?>           <?php endif; ?>      </ul>   </div></div><?php get_footer(); ?>