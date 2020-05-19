<?php
   /*
   Template Name: Landing Page 2020
   */ 
   
   ?>

<?php
   include('header-landing.php');
   ?>
<div class="home-bxslider bslider">
   <div class="home-page-slider">
      <?php $d_image = get_field('banner_image'); ?>
      <div class="slider-sec slider-sec-1" style="background:url('<?php echo $d_image['url']; ?>')">
         <!--banner for ie browser-->
         <?php $ie_image = get_field('ie_banner_image'); ?>
         <!--banner for ie browser-->
         <img src="<?php echo $ie_image['url']; ?>">
         <?php $image = get_field('mobile_banner_image'); ?>
         <style>
            @media(max-width:767px){
            .slider-sec.slider-sec-1{background:url('<?php echo $image['url']; ?>') !important;background-size: cover !important;}
            }
         </style>
         <div class="banner-single">
         </div>
         <div class="banner-caption-block">
            <div class="traffic-block">
               <div class="bdr-line"></div>
               <ul class="mobile-traffic-slide">
                  <?php if( have_rows('banner_internet') ):  ?>
                  <?php
                     $cnt = 1;
                     ?>	
                  <?php  while ( have_rows('banner_internet') ) : the_row(); ?>
                  <li>
                     <div class="traffic-box">
                        <?php $image = get_sub_field('internet_icon'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php the_sub_field('internet_title');?>
                     </div>
                  </li>
                  <?php
                     $cnt++;
                     endwhile; ?>
                  <?php endif;?>
               </ul>
            </div>
            <div class="gravity-form home-bottom-form download-form">
               <div class="download-form-title">
                  Tell us about yourself 
                  <span>and we’ll share your download!</span>
               </div>
               <?php echo do_shortcode('[gravityform id="107" title="false" description="false"]'); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="page-curve">
      <div class="real-curve">
         <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1952.1 347.3" style="enable-background:new 0 0 1952.1 347.3;" xml:space="preserve">
            <style type="text/css">
               .st0{display:none;opacity:1;enable-background:new    ;}
               .st1{fill:#88CCF1;}
            </style>
            <path class="st0" d="M132.2-111.8c0,0,741,490.5,1919,123.6v24c0,0-948.5,375.9-1918.9,0L132.2-111.8z"/>
            <path class="st1" d="M0.1,4.1l-0.4,145.1c0,0,494.6,246,1417.7,138c0,0,312.8-33,535.2-135l0.5-22.5
               C1953.1,129.6,983.8,501.6,0.1,4.1z"/>
         </svg>
      </div>
      <div class="fill-curve">
         <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
         <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1952.1 347.3" style="enable-background:new 0 0 1952.1 347.3;" xml:space="preserve">
            <style type="text/css">
               .st2{fill:#FFFFFF;}
               .st3{fill:#FFFFFF;} 
            </style>
            <path class="st2" d="M1948.9,349.8l3.2-201c0-0.1-969.3,386.2-1953-130.4l-0.4,331.4"/>
            <path class="st3" d="M1948.9,349.8l3.2-201c0-0.1-969.3,386.2-1953-130.4l-0.4,331.4"/>
         </svg>
      </div>
   </div>
</div>
<!-- S:Services -->
<div class="multiple-section">
   <div class="gray-section">
      <div class="partner-logo-sec divider-line">
         <div class="content-center">
            <div class="af-title">PARTNERSHIPS</div>
            <ul>
               <?php if(get_field('add_partner_logo')): ?> 
               <?php while(has_sub_field('add_partner_logo')): ?> 
				   
               <li>
			   <?php if(get_sub_field('script_code')){ ?>
			   <?php the_sub_field('script_code_image'); ?>
			   
			    <?php } else{ ?>
				 <?php if(get_sub_field('logo_link')){ ?>
                  <a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php the_sub_field('logo_image'); ?>"></a>
                  <?php } else{ ?>
                  <img src="<?php the_sub_field('logo_image'); ?>">
                  <?php } ?>
				<?php } ?>
			   
                 
               </li>
               <?php endwhile; ?>  
               <?php endif; ?>	
            </ul>
         </div>
      </div>
      <!-- S:About Us -->
      <div id="home-about">
         <div class="content-center">
            <div class="row-site align-items-center .content-panel-area-new">
               <div class="col-6-site right-sec-content p-right">
                  <?php $image = get_field('about_right_image'); ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
               </div>
               <div class="col-6-site">
                  <div class="about-inner-content">
                     <div class="site-head "><?php the_field('about_heading');?></div>
                     <div class="site-subhead"><?php the_field('about_subheading');?></div>
                     <div class="content-scroller">
                        <p><?php the_field('about_content');?></p>
                     </div>
                     <?php $link = get_field('learn_more_link');
                        if( $link ): 								
                        	$link_url = $link['url'] ? $link['url'] : '#';
                        	$link_title = $link['title'] ? $link['title'] : 'Learn More';
                        	$link_target = $link['target'] ? $link['target'] : '_self';
                        	?>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- E:About Us -->
      <!--hvac markiting section start here-->
      <div class="hvac-markiting-sec divider-line">
         <div class="content-center">
            <h2><?php the_field('marketing_heading');?></h2>
            <p><?php the_field('marketing_content');?></p>
         </div>
      </div>
      <!--hvac markiting section end here-->
   </div>
</div>
<div class="review-sec">
   <div class="content-center">
      <div class="review-heading"><?php the_field('reviews_heading');?></div>
      <div class="review-row">
         <div class="review-column">
            <?php if(get_field('add_reviews')): ?>                   
            <?php while(has_sub_field('add_reviews')): ?>
            <div class="review-column-inner">
               <div class="review-head">
                  <?php the_sub_field('name'); ?><?php if(get_sub_field('designation')){ ?>, <?php the_sub_field('designation'); ?><?php } ?>
                  <strong><?php the_sub_field('client_name'); ?></strong>
               </div>
               <p>“<?php the_sub_field('reviews_content'); ?>”
               </p>
            </div>
            <?php endwhile; ?>  
            <?php endif; ?>
         </div>
         <div class="review-video">
            <div class="review-video-btn">
               <input type="button" id="popup__toggle" />
            </div>
            <!--video-html-->
            <?php if(get_field('video_path')){ ?>
            <div class="popup__overlay">
               <div class="popup" id="popupVid">
                  <div class="popup-close"></div>
                  <iframe src="<?php the_field('video_path');?>?title=0&amp;byline=0&amp;portrait=0" width="640/embed/?moog_width=640" height="480" frameborder="no" allowfullscreen=""></iframe>
               </div>
            </div>
            <?php } ?>
            <!--video-html-->
         </div>
      </div>
   </div>
</div>
<div class="featured-sec featured-slider">
   <div class="content-center">
      <div class="featured-title"><?php the_field('featured_heading');?></div>
      <ul>
         <?php if(get_field('add_featured_logo')): ?>                   
         <?php while(has_sub_field('add_featured_logo')): ?>
         <li>
            <?php if(get_sub_field('logo_link')){ ?>
            <a href="<?php the_sub_field('logo_link'); ?>"><?php 
               $logo_image = get_sub_field('logo_image');
               if( !empty( $logo_image ) ): ?>
            <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" />
            <?php endif; ?></a>
            <?php } else{ ?>
            <?php 
               $logo_image = get_sub_field('logo_image');
               if( !empty( $logo_image ) ): ?>
            <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" />
            <?php endif; ?>
            <?php }?>
         </li>
         <?php endwhile; ?>  
         <?php endif; ?>
      </ul>
   </div>
</div>

<script>
jQuery(document).ready(function() {
   	if (jQuery(window).width() < 1200) {
jQuery( ".partner-logo-sec " ).before( jQuery( ".download-form" ) );
	}
   });
</script>
<script>
   jQuery(document).ready(function() {
   	if (jQuery(window).width() > 769) {
   		jQuery('.slide-testimonial-home').slick({
   			dots: false,
   			infinite: true,
   			speed: 300,
   			slidesToShow: 2,
   			slidesToScroll: 1,
   			responsive: [
   
   
   			{
   				breakpoint: 992,
   				settings: {
   					slidesToShow: 1,
   					slidesToScroll: 1,
   
   				}
   			}
   
   			]
   		});
   	};
   	jQuery('.read-more-text').click(function (event) {
   		event.preventDefault();
   		jQuerythis = jQuery(this);
   		jQuery('.hide-content-sec').slideToggle(1000);
   		jQuerythis.text(jQuerythis.text() == 'READ LESS -' ? 'READ MORE +' : 'READ LESS -');
   	});
   
   //Mobile banner slider//
   jQuery('.mobile-traffic-slide').slick({
   infinite: true,
   slidesToShow: 3,
   slidesToScroll: 1,
   autoplay: true,
   autoplaySpeed: 2000,
   arrows: false,
   responsive: [
   {
   	breakpoint: 1300,
   	settings: {
   		slidesToShow: 2,
   		slidesToScroll: 1,
   		infinite: true,
   		dots: false
   	}
   },
   {
   	breakpoint: 992,
   	settings: {
   		slidesToShow: 1,
   		slidesToScroll: 1
   	}
   },
   {
   	breakpoint: 767,
   	settings: {
   		slidesToShow: 1,
   		slidesToScroll: 1
   	}
   }
   
   ]
   
   });
   
   jQuery(".industries-btn").click(function(){
   jQuery(this).toggleClass("open");
   jQuery(".industries-sec .columns-row").slideToggle();
   });
   
   
   
   
   //Mobile banner slider// 
   });
   
</script>
<script>
   jQuery(document).ready(function() {
   	jQuery('.collapse-title').click(function(e) {
   		e.preventDefault();
   
   		var jQuerythis = jQuery(this);
   
   		if (jQuerythis.next().hasClass('show')) {
   			jQuerythis.next().removeClass('show');
   			jQuerythis.next().slideUp(350);
   
   		} else {
          // jQuerythis.parent().parent().find('.content-accordion-panel').removeClass('show');
          // jQuerythis.parent().parent().find('.content-accordion-panel').slideUp(350);
          jQuerythis.next().toggleClass('show');
          jQuerythis.next().slideToggle(350);
      }
   });
   
   	jQuery(".collapse-title").click(function(){
   		jQuery(this).toggleClass("active");
   
   	});
   
   });
</script>
<script>
   var p = jQuery(".popup__overlay");
   jQuery("#popup__toggle").click(function() {
     p.css("display", "block");
   });
   p.click(function(event) {
     e = event || window.event;
     if (e.target == this) {
       jQuery(p).css("display", "none");
     }
   });
   jQuery(".popup-close").click(function() {
     p.css("display", "none");
   });
   
   //video popup
   function toggleVideo(state) {
     // if state == 'hide', hide. Else: show video
     var div = document.getElementById("popupVid");
     var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
     //div.style.display = state == 'hide' ? 'none' : '';
     func = state == "hide" ? "pauseVideo" : "playVideo";
     iframe.postMessage(
       '{"event":"command","func":"' + func + '","args":""}',
       "*"
     );
   }
   
   jQuery("#popup__toggle").click(function() {
     p.css("visibility", "visible").css("opacity", "1");
   });
   
   p.click(function(event) {
     e = event || window.event;
     if (e.target == this) {
       jQuery(p)
         .css("visibility", "hidden")
         .css("opacity", "1");
       toggleVideo("hide");
     }
   });
   
   jQuery(".popup__close").click(function() {
     p.css("visibility", "hidden").css("opacity", "0");
     toggleVideo("hide");
   });
   
   jQuery(function(){
       jQuery('.popup-close, .popup__overlay').click(function(){      
           jQuery('#popupVid iframe').attr('src', jQuery('#popupVid iframe').attr('src'));
       });
   });
   
</script>
<?php
   include('footer-landing.php');
   ?>