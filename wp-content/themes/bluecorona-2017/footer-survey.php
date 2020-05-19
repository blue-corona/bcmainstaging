

<?php
   /**
   * Template for displaying the footer
   *
   * Contains the closing of the id=main div and all content after
   *
   * @package WordPress
   * @subpackage Bluecorona_2015
   * @since Bluecorona 2015 1.0
   */
   global  $footer_id;
   ?>
<div class="gravity-form home-bottom-form" style="padding: 20px;
    background: #055eaa;">
   <div class="content-center">
      <div class="form-center">
         <div class="icon"></div>
         <div class="form-heading"><strong>Get Started</strong>with Blue Corona Today</div>
         <?php echo do_shortcode('[gravityform id="95" title="false" description="false"]'); ?>
      </div>
   </div>
</div>
<!-- S:Free Stuff -->
<?php if ( !is_page_template( 'template-iframe.php' ) ) {?>
<?php if(is_singular("hvac")) {?>
<div id="offices" class="hvac-sin">
<?php } else { ?>
<div id="offices">
   <?php } ?>
   <div class="content-center">
      <div class="contact-left">
         <?php $phonm = get_field('phone_number', $footer_id);  ?>
         <div class="footer-contact"><i class="fa fa-phone" aria-hidden="true"></i> Let’s talk <span><a href="tel:<?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1$2$3", $phonm); ?>"><?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phonm); ?></a></span> </div>
         <div class="footer-social-1">
            <ul>
               <?php include('social-media.php')?>
            </ul>
         </div>
      </div>
      <div class="contact-middle">
         <?php wp_nav_menu( array('menu' => 'Footer Menu New' )); ?>
      </div>
      <div class="contact-right">
         <?php if( have_rows('address', $footer_id) ):  ?>
         <?php  while ( have_rows('address', $footer_id) ) : the_row(); ?>
         <div class="office-address-block wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="address-head"><?php the_sub_field('address_heading');?></div>
            <div class="address-text">
               <?php the_sub_field('location');?>
            </div>
            <div class="footer-link">
               <?php $link = get_sub_field('location_link');
                  if( $link ):                
                   $link_url = $link['url'] ? $link['url'] : '#';
                   $link_title = $link['title'] ? $link['title'] : 'Directions';
                   $link_target = $link['target'] ? $link['target'] : '_blank';
                   ?>
               <a class="get-quote" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
               <?php endif; ?>
            </div>
         </div>
         <?php  endwhile;?> 
         <?php endif;?>
      </div>
   </div>
   <!-- E:Offices --> 
   <!-- S:Footer -->
   <div id="footer" class="grey-txt footer-bottom wow fadeInUp">
      <div class="content-center">
         <?php if ( !wp_is_mobile() ) {  ?>
         <?php if(is_singular("hvac")) {?>
         <div class="footer-links"> &copy; <?php echo date('Y'); ?> <strong>Blue Corona</strong></div>
         <?php } else { ?>
         <?php $link = get_field('sitemap_link',  $footer_id) ; ?>
         <div class="footer-links"> &copy; <?php echo date('Y'); ?> <strong>Blue Corona</strong>&nbsp;&nbsp;    | <a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a> | <a href="https://bcmainstaging.wpengine.com/privacy">Privacy Policy</a> | <a href="javascript:void(0)" class="disclaimer-btn">Disclaimer</a>
         </div>
         <?php } ?>
         <?php }  ?>
         <?php if ( wp_is_mobile() ) {  ?>
         <?php if(is_singular("hvac")) {?>
         <div class="footer-links footer-mobile-links"> &copy; <?php echo date('Y'); ?> Blue Corona</div>
         <?php } else { ?>
         <?php $link = get_field('sitemap_link',  $footer_id) ; ?>
         <div class="footer-links footer-mobile-links"> &copy; <?php echo date('Y'); ?> Blue Corona&nbsp;&nbsp; <a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a> | <a href="#">Privacy Policy</a> | <a href="javascript:void(0)" class="disclaimer-btn">Disclaimer</a></div>
         <?php } ?>
         <?php }  ?>
         <?php
            if (is_front_page())
            
            
            
             {?>
         <div class="footer-arrow">
            <div class="arrow-link up-arrow-link-in">
               <div class="arrow-link-in  purple-bg ">
                  <a href="#home-banner">
                     <div class="down-arrow"> <span class="left"></span> <span class="center"></span> <span class="right"></span> </div>
                  </a>
               </div>
            </div>
         </div>
         <?php } else { ?>
         <div class="footer-arrow">
            <div class="arrow-link up-arrow-link-in">
               <div class="arrow-link-in  purple-bg ">
                  <a href="#sub-container">
                     <div class="down-arrow"> <span class="left"></span> <span class="center"></span> <span class="right"></span> </div>
                  </a>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
      <div class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
      <!--div class="scrollup111"><i class="fa fa-angle-up" aria-hidden="true"></i></div-->
      <div class="live-chat">Live Chat <i class="fa fa-commenting-o" aria-hidden="true"></i> </div>
   </div>
   <!-- E:Footer --> 
</div>
<!---disclaimer popup---->
<div class="popup_background"></div>
<div class="popup_wrapper">
   <div class="popup_content">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-title">Disclaimer</div>
            <button type="button" class="close">
            <img src="https://bcmainstaging.wpengine.com/wp-content/themes/bluecorona-2017/images/multiply.png">
            </button>
         </div>
         <div class="modal-body">
            <p>The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a href="https://bcmainstaging.wpengine.com/contact-us">Contact us</a> for complete details. </p>
         </div>
      </div>
   </div>
   <div class="popup_align" style="display: inline-block; vertical-align: middle; height: 100%;"></div>
</div>
<!---disclaimer popup ends---->
<!-- E:Main Wrapper -->
<?php 
   if(is_page(array(12776, 13120, 13231)))
   {
     ?>
<div class="popup1 popup overleydiv">
   <div class="popu-form sub-content-form">
      <div class="close-icon"><a href="#close"><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/close-icon-1.png"></a></div>
      <div class="left-coln">
         <div class="img-heading">Downloadable Resources</div>
         <img src="https://www.bluecorona.com/wp-content/uploads/2017/01/when-to-use-1.jpg">
      </div>
      <div class="right-coln">
         <h3 class="gform_title heading">Download the pdf now!</h3>
         <?php echo do_shortcode('[gravityform id=59 title=false description=false ajax=true tabindex=49]'); ?>
      </div>
   </div>
</div>
<div class="popup2 popup overleydiv">
   <div class="popu-form sub-content-form">
      <div class="close-icon"><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/close-icon-1.png"></div>
      <div class="left-coln">
         <div class="img-heading">Downloadable Resources</div>
         <img src="https://www.bluecorona.com/wp-content/uploads/2017/01/engage-members-1.jpg">
      </div>
      <div class="right-coln">
         <h3 class="gform_title heading">Download the pdf now!</h3>
         <?php echo do_shortcode('[gravityform id=60 title=false description=false ajax=true tabindex=49]'); ?>
      </div>
   </div>
</div>
<div class="popup3 popup overleydiv">
   <div class="popu-form sub-content-form">
      <div class="close-icon"><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/close-icon-1.png"></div>
      <div class="left-coln">
         <div class="img-heading">Downloadable Resources</div>
         <img src="https://www.bluecorona.com/wp-content/uploads/2017/01/comp-analysis-1.jpg">
      </div>
      <div class="right-coln">
         <h3 class="gform_title heading">Download the pdf now!</h3>
         <?php echo do_shortcode('[gravityform id=61 title=false description=false ajax=true tabindex=49]'); ?>
      </div>
   </div>
</div>
<?php
   }
   ?>
<div class="dig-main-footer">
   <div class="footer-content">
      <div class="crosse-btn"><img src="<?php bloginfo( 'template_directory' ); ?>/images/close-arrow.png"></div>
      <div class="footer-headline">
         <p>Ready to increase your online presence today with digital marketing?</p>
      </div>
   </div>
   <div class="digital-footer">
      <div class="content-center">
         <div class="digital-btn-row">
            <div class="digital-btn btn-1"><a href="https://www.bluecorona.com/internet-marketing-services/competitor-analysis">Competitive Analysis</a></div>
            <div class="digital-btn btn-2"><a href="https://www.bluecorona.com/internet-marketing-services">small business</a></div>
            <div class="digital-btn btn-3"><a href="https://www.bluecorona.com/internet-marketing-services/franchises">Franchise marketing</a></div>
         </div>
      </div>
   </div>
   <?php }?>
</div>
<?php wp_footer(); ?>
<script defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-ui.min.js"></script> 
<script defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-ui.tabs.accordion.min.js"></script> 
<script defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.easing.1.3.min.js"></script> 
<script defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.bxslider.js"></script> 
<script  defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.mCustomScrollbar.min.js"></script> 
<script  defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.isotope.js"></script> 
<script defer="defer" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flexslider.js"></script> 
<script defer="defer" type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jQuery.print.js"></script>
<script defer="defer" type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/slick.min.js"></script>
<script defer="defer" type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flexnav.min.js"></script>
<?php if (is_page() ) { ?>
<script>
   jQuery("#gform_81").submit(function(event){
    event.preventDefault();
    window.open('https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/08/HTTPS-Is-Good-For-SEO-Downloadable.pdf', '_blank');
   });
   
</script>
<?php } ?>
<?php if (is_singular('case-portfolio') ) { ?>
  <script>
    jQuery(window).on("load",function(){
      var pdfurlfield = '<?php echo the_field('pdf', get_the_id() ) ?>' ; //fetches the PDF URL that is uploaded in the backend 
      //console.log( pdfurlfield ) ; 
      jQuery('body').find('#input_6_5').val(pdfurlfield); 
    });
  </script>
<?php } ?>
<?php
   if ( wp_is_mobile() ) { ?>
<script>
   jQuery(window).on("load",function(){
   jQuery(".content-scroller").mCustomScrollbar({
   scrollButtons:{enable:true},
   scrollbarPosition:"outside",
   scrollInertia: 5000
   
   });
   });
</script>  
<?php
   } else { ?>
<script>
   jQuery(window).on("load",function(){
   jQuery(".content-scroller").mCustomScrollbar({
   scrollButtons:{enable:true},
   scrollbarPosition:"outside"
   
   
   });
   });
</script>  
<?php } 
   ?>
<script>
   jQuery(document).ready(function(){
    jQuery('.disclaimer-btn').click(function(){
     jQuery('.popup_background').addClass('popup_bg_visible');
     jQuery('.popup_wrapper').addClass('popup_wrapper_visible');
     jQuery('.popup_content').addClass('popup_content_visible');
   });
    jQuery('.close').click(function(){
     jQuery('.popup_background').removeClass('popup_bg_visible');
     jQuery('.popup_wrapper').removeClass('popup_wrapper_visible');
     jQuery('.popup_content').removeClass('popup_content_visible');
   });
   
   });
</script>
<script>
   jQuery(document).ready(function(){ 
   
     var $animation_elements = jQuery('#hnd-move');
     var $window = jQuery(window);
   
     function check_if_in_view() {
       var window_height = $window.height();
       var window_top_position = $window.scrollTop();
       var window_bottom_position = (window_top_position + window_height);
   
       jQuery.each($animation_elements, function() {
         var $element = jQuery(this);
         var element_height = $element.outerHeight();
         var element_top_position = $element.offset().top;
         var element_bottom_position = (element_top_position + element_height);
   
     //check to see if this current container is within viewport
     if ((element_bottom_position >= window_top_position) &&
       (element_top_position <= window_bottom_position)) {
       $element.addClass('in-view');
   } else {
     $element.removeClass('in-view');
   }
   });
     }
   
     $window.on('scroll resize', check_if_in_view);
     $window.trigger('scroll');
   
   
   
   
   
   
   
   });
   
   
   
   
   
   
   
   jQuery(document).ready(function() {  
   
     jQuery('.service-testimonial-block').slick({
       dots: true,
       infinite: false,
       speed: 300,
       slidesToShow: 1,
       slidesToScroll: 1,
     });
   //jQuery('.slide-cont').hover(function(){
     //jQuery(this).addClass('slideup');
   //});
   
   jQuery(".tabs-menu a").click(function(event) {
     event.preventDefault();
     jQuery(this).parent().addClass("current");
     jQuery(this).parent().siblings().removeClass("current");
     var tab = jQuery(this).attr("href");
     jQuery(".challenge-view").not(tab).css("display", "none");
     jQuery(tab).fadeIn();
   });
   
   
   var t = 1;  
   jQuery(window).scroll(function(){
     if(jQuery(".average-container").isOnScreen()){
       countfunc();
       
     }
   });
   
   var p = 1;  
   jQuery(window).scroll(function(){
     if(jQuery(".media-section-seven").isOnScreen() && p){
       countfunc1();
       p = 0;
     }
   });
   
   });
   jQuery.fn.isOnScreen = function(){
   
     var win = jQuery(window);
   
     var viewport = {
       top : win.scrollTop(),
       left : win.scrollLeft()
     };
     viewport.right = viewport.left + win.width();
     viewport.bottom = viewport.top + win.height();
   
     var bounds = this.offset();
     bounds.right = bounds.left + this.outerWidth();
     bounds.bottom = bounds.top + this.outerHeight();
   
     return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
   
   };
   function countfunc(){
     jQuery('#demo-pie-1').pieChart({
       barColor: '#002b5c',
       trackColor: '#e7e7e6',
       lineCap: 'butt',
       lineWidth: 13,
       onStep: function (from, to, percent) {
         jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#002b5c');
       }
     });
   
     jQuery('#demo-pie-2').pieChart({
       barColor: '#8dc63f',
       trackColor: '#e7e7e6',
       lineCap: 'butt',
       lineWidth: 13,
       onStep: function (from, to, percent) {
         jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#002b5c');
       }
     });
   
     jQuery('#demo-pie-3').pieChart({
       barColor: '#f47b20',
       trackColor: '#e7e7e6',
       lineCap: 'square',
       lineWidth: 13,
       onStep: function (from, to, percent) {
         jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#002b5c');
       }
     });
   
   }  
   //---------- triger for case studies---
   jQuery(window).load(function(){
   if(window.location.hash) {
       var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
       //alert (hash);
       if (hash){
    // alert(1);
    jQuery("document").ready(function() {
     var dev = '.' + hash;
     setTimeout(function() {
   
      jQuery(dev).trigger('click');
    },10);
   });
   } 
   
   }
   });
</script>
<script type="text/javascript">
   jQuery(document).ready(function() {
     jQuery('.crosse-btn').click(function(){
       jQuery('.footer-content').fadeOut('slow');
   
     });
   
   });
</script>
<script>
   jQuery(document).ready(function() {
     jQuery('.award-page-hidden-content').hide();
     jQuery('.re_ad span').click(function (event) {
       event.preventDefault();
       jQuerythis = jQuery(this);
       jQuery('.award-page-hidden-content').slideToggle('slow');
       jQuerythis.text(jQuerythis.text() == 'read Less' ? 'read more' : 'read Less');
     });
   });
</script>
<script>
   if (jQuery(window).width() > 767) {
     var lastScrollTop = 0;
     jQuery(window).scroll(function(event){
      var st = jQuery(this).scrollTop();
      if (st > lastScrollTop){
        jQuery("body").addClass("scrolled");
      } else {
        if(jQuery("body").hasClass("scrolled"))
        {
          jQuery("body").removeClass("scrolled");
          jQuery('.footer-content').fadeIn('slow');
          jQuery('.dig-main-footer').addClass('check');
        }
      }
      lastScrollTop = st;
    });
   }
</script>
<script type="text/javascript">
   // Popup window code
   function newPopup(url) {
     popupWindow = window.open(
       url,'popUpWindow','height=600,width=1200,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
   }
</script> 
<script>
   jQuery(document).ready(function() {  
   
   //jQuery('.slide-cont').hover(function(){
     //jQuery(this).addClass('slideup');
   //});
   
   jQuery(".tabs-menu a").click(function(event) {
     event.preventDefault();
     jQuery(this).parent().addClass("current");
     jQuery(this).parent().siblings().removeClass("current");
     var tab = jQuery(this).attr("href");
     jQuery(".challenge-view").not(tab).css("display", "none");
     jQuery(tab).fadeIn();
   });
   
   
   var t = 1;  
   jQuery(window).scroll(function(){
     if(jQuery(".media-section-four").isOnScreen()){
       countfunc();
       
     }
   });
   
   var p = 1;  
   jQuery(window).scroll(function(){
     if(jQuery(".media-section-seven").isOnScreen() && p){
       countfunc1();
       p = 0;
     }
   });
   
   });
   jQuery.fn.isOnScreen = function(){
   
     var win = jQuery(window);
   
     var viewport = {
       top : win.scrollTop(),
       left : win.scrollLeft()
     };
     viewport.right = viewport.left + win.width();
     viewport.bottom = viewport.top + win.height();
   
     var bounds = this.offset();
     bounds.right = bounds.left + this.outerWidth();
     bounds.bottom = bounds.top + this.outerHeight();
   
     return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
   
   };
   function countfunc(){
     jQuery('#demo-pie-1').pieChart({
       barColor: '#11b7e9',
       trackColor: '#e6e7e7',
       lineCap: 'butt',
       lineWidth: 13,
       onStep: function (from, to, percent) {
         jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#002b5c');
       }
     });
   
     jQuery('#demo-pie-2').pieChart({
       barColor: '#8fc93f',
       trackColor: '#e6e7e7',
       lineCap: 'butt',
       lineWidth: 13,
       onStep: function (from, to, percent) {
         jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#002b5c');
       }
     });
   
     jQuery('#demo-pie-3').pieChart({
       barColor: '#f8791c',
       trackColor: '#e6e7e7',
       lineCap: 'square',
       lineWidth: 13,
       onStep: function (from, to, percent) {
         jQuery(this.element).find('.pie-value').text(Math.round(percent) + '%').css('color','#002b5c');
       }
     });
   
   } 
   function countfunc1(){
     jQuery('.progress').asProgress({
       'namespace': 'progress'
     });
     jQuery('#button_start').on('click', function() {
       jQuery('.progress').asProgress('start');
     });
     jQuery('#button_start').trigger('click');
   }
   
   jQuery(window).scroll(function() {
     if (jQuery(this).scrollTop() > 100){  
       jQuery('.dotted-line').addClass("dotted-line-view");
     }
     else{
       jQuery('.dotted-line').removeClass("dotted-line-view");
     }
   });
   
   jQuery(document).ready(function(){
     jQuery('.toggle-link').click(function(event){
       event.preventDefault();
       jQuery('.toggle-list').slideToggle().toggleClass('toggle-active');
       jQuery("html, body").animate("slow");
       
   
       if(jQuery('.toggle-list').hasClass('toggle-active')){
         jQuery('.toggle-link span').text('-');
       }
       else{
         jQuery('.toggle-link span').text('+');
       }
   
   
     });
   
   
   });
   
   
   
   
</script>
<script>
   jQuery("#show" ).click(function() {
   
   
   
   
   
   
   
    jQuery("#hide" ).slideToggle( "slow",function(){
   
   
   
   
   
   
   
      jQuery("#hide .logo-block").toggleClass('fadeInDown');
   
   
   
   
   
   
   
    });
   
   
   
   
   
   
   
   });
   
   
   
   
   
   
   
</script>
<?php if(!is_page(54)){ ?>
<script>
   if(jQuery(window).width() <= 767){
   
     jQuery( "#case-blocks" ).hide();
   }
   else
   {
     jQuery( "#case-blocks-mobile" ).hide();
   }
   if(jQuery(window).width() >= 768){
   
   
   
    jQuery(document).ready(function(){
   
   
   
   /*  setTimeout(function() {
   
      jQuery('body').css('overflow','hidden');
   
    }, 5500);*/
   
   
   
   
   
    jQuery(document).on('click', '.overlay-close', function(){
   
     jQuery( ".popmake-close" ).trigger( "click" );
   
     jQuery('body').css('overflow','auto');
   
   
   
   
   
   });
   
   });
   
   }
   
</script>
<?php } ?>
<script type="text/javascript">
   jQuery(function() {
   
   
   
     jQuery("#hrefPrint").click(function() {
   
   
   
     // Print the DIV.
   
   
   
     jQuery("#print-doc").print();
   
   
   
     return (false);
   
   
   
   });
   
   
   
   });
   
   
   
</script>
<?php if ( wp_is_mobile() ) {  ?>
<script>
   jQuery(document).ready(function(){
   
   
   
   
     jQuery("#gform_submit_button_1").val('Send it');
   
   
   
   
   
   
   
     jQuery("#gform_submit_button_2").val('Send it');
   
   
   
   
   
   
   
     jQuery("#gform_submit_button_3").val('Send it');
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   });
   
   
   
   
   
   
   
</script>
<?php } ?>
<script>
   jQuery(".bubble-icon").click(function(){
   
   
   
   
   
   
   
     jQuery("#subform-group").fadeToggle(1000);
   
   
   
   
   
   
   
   
   
   
   
     jQuery(".bubble-icon").toggleClass("close-form");
   
   
   
     jQuery(".bubble-icon-conatiner").toggleClass("bubble-icon-inner");
   
   
   
   });  
   
   
   
   
</script> 
<script>
   jQuery(document).ready(function(){
    jQuery('.image-sec1').click(function (event) {
     event.preventDefault();
     jQuery('.popup1').fadeIn("slow");
   });
    jQuery('.image-sec2').click(function (event) {
     event.preventDefault();
     jQuery('.popup2').fadeIn("slow");
   });
    jQuery('.image-sec3').click(function (event) {
     event.preventDefault();
     jQuery('.popup3').fadeIn("slow");
   });
    jQuery('.close-icon').click(function (event) {
     jQuery('.popup').fadeOut("slow");
   });
   
    /* pop-up fadeIn fadeOut 25-11-16*/
   
    jQuery('.pop-btn').click(function(){   
     jQuery('.pop-form').toggleClass('popup-open');
     jQuery('.popup-mobile').toggleClass('popup-active');
     jQuery('body').addClass('fixed-body');
   
   });
    jQuery('.form-close').click(function(){   
     jQuery('.pop-form').removeClass('popup-open');
     jQuery('body').removeClass('fixed-body');
     jQuery('.popup-mobile').removeClass('popup-active');
   
   });
    jQuery('.partner-logo-sec ul').slick({
     autoplay: true,
     arrows: false,
     slidesToShow: 5,
     slidesToScroll: 1,
     infinite: false,
     dots: false,
     responsive: [
     {
       breakpoint: 1024,
       settings: {
        autoplay: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
     breakpoint: 768,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 1,
       arrows: false,
     }
   }
   ]
   
   });
   
    jQuery(".center").slick({
     dots: true,
     arrows: true,
     infinite: true,
     centerMode: true,
     slidesToShow: 1,
     slidesToScroll: 1,
     centerPadding: '200px'
   });
    jQuery('.bluecorona-testimonials .testimonial-slider').slick({
   
     dots: true
   });
    jQuery('.btn-center').on( 'click', function(){
     jQuery('html, body').animate({
       scrollTop: jQuery(".content-center .apply-now-heading").offset().top-155
     }, 2000);
   }); 
   
    jQuery('.home-services-slider').slick({
     slidesToShow: 4,
     slidesToScroll: 1,
     arrows: true,
     dots: true,
     responsive: [
     {
       breakpoint: 767,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
       }
     },
   
   
   
     ]
   
   }); 
   
    jQuery('.secondary-services-slider').slick({
     slidesToShow: 5,
     slidesToScroll: 1,
     arrows: false, 
     dots: true,
     responsive: [
     {
       breakpoint: 992,
       settings: {
         slidesToShow: 4,
         slidesToScroll: 1,
       }
     },
   
     {
       breakpoint: 767,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
       }
     },
     {
       breakpoint: 667,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
       }
     },
   
     ]
   
   });  
   
   });
</script>
<script>
   jQuery(document).ready(function(){
   
   
    jQuery('#footer a').addClass("footer-link");
    jQuery('.bc-services a').addClass("footer-nav-link");
    jQuery('.list-categories li a').addClass("blog-sidebar-categories");
    
   
   
    jQuery(".team-portfolio .info-button").click(function (event) {
   
   
   
     event.preventDefault();
   
   
   
     jQuery(".team-portfolio").removeClass("team-portfolio-bg");
   
   
   
         jQuery(this).closest('.team-portfolio').addClass('team-portfolio-bg'); // I also tried .parent().addClass
   
   
   
       });
   
    jQuery('.hiden-cont').hide();
    jQuery('.single-faq-head span').click(function (event) {
      event.preventDefault();
      jQuerythis = jQuery(this);
      jQuery('.hiden-cont').slideToggle(1000);
      jQuerythis.text(jQuerythis.text() == 'read Less' ? 'read more' : 'read Less');
    });
    jQuery('.single-faq-head').click(function(){
     jQuery(this).toggleClass('active');
     jQuery(this).next('.single-faq-content').slideToggle(1000);
   });
   
    jQuery('.cmp-logo-more').click(function(){
   
   
   
     jQuery(this).toggleClass('logo-less');
   
   
   
   });
   
   
   
    jQuery('.cmp-logo-more #show').click(function (event) {
   
   
   
     event.preventDefault();
   
   
   
     jQuerythis = jQuery(this);
   
   
   
     jQuerythis.text(jQuerythis.text() == 'Show Less' ? 'Show More' : 'Show Less');
   
   
   
   });
   
   
   });
   
   
   
</script> 
<script>
   var ismobile = <?php if(wp_is_mobile()){ echo '1';}else{echo '0';} ?>;
   
   
   
   jQuery(function() {
   
   
   
    var bblicn = jQuery(".bubble-icon");
   
   
   
    setInterval(function(){
   
   
   
      bblicn.toggleClass("pulse");
   
   
   
    }, 5000);
   
   
   
    /*class add on menu*/
   
   
   
   
   
   
   
    jQuery( ".ubermenu-responsive-toggle" ).click(function() {
   
   
     jQuery( this ).toggleClass( "close-toggle" );
   
   
   });
   
   
   
   
   
   
   
    /*content-accs effect*/
   
   
   
   
   
   
   
   
   
    jQuery( "#free-tabs" ).tabs();
   
   
   
   
   
   
   
    /*Home page imput effect*/
   
   
   
    addlabeleffect('#gform_1 input:not(input[type="button"])');
   
   
   
    addlabeleffect('#gform_2 input:not(input[type="button"])');   
   
   
   
    addlabeleffect('#gform_3 input:not(input[type="button"])');
   
   
   
    addlabeleffect('#gform_5 input:not(input[type="button"])');
   
   
   
    addlabeleffect('#gform_5 textarea:not(textarea[type="button"])');
    addlabeleffect('.gravity-form input:not(textarea[type="button"])');
    addlabeleffect('.gravity-form textarea:not(textarea[type="button"])');
   
    
   
    addlabeleffect('#case-study-form input:not(input[type="button"])');
   
   
   
    addlabeleffect('.sub-content-form input:not(input[type="button"])');
   
    
   
    addlabeleffect('#gform_44 input:not(input[type="button"])');
   
   
   
    addlabeleffect('.sub-content-form textarea:not(textarea[type="button"])');
   
   
   
    addlabeleffect('.single-content-form input:not(textarea[type="button"])');
   
    
   
    addlabeleffect('#gform_46 input:not(input[type="button"])');
   
    
    addlabeleffect('#gform_53 input:not(input[type="button"])');
    
    addlabeleffect('#gform_55 input:not(input[type="button"])');
   
   
    /*Smooth Scroll*/
   
   
   
    jQuery('.arrow-link-in a[href*=#]:not([href=#])').click(function(event) {
   
      event.preventDefault();
   
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
   
   
   
        var target =jQuery(this.hash);
   
   
   
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
   
   
   
        if (target.length) {
   
   
   
          jQuery('html,body').animate({
   
   
   
            scrollTop: target.offset().top-150
   
   
   
          }, 'slow');
   
   
   
   
   
   
   
   
        }
   
   
   
      }
   
   
   
    });
   
   
   
    /*Header fixed*/
   
   
   
    if(jQuery(window).width() > 1024){
   
   
   
      jQuery(window).scroll(function(){
   
   
   
        var sticky = jQuery('#header'),
   
   
   
        scroll = jQuery(window).scrollTop();
   
   
   
        if (scroll >= 50) sticky.addClass('fixed');
   
   
   
        else sticky.removeClass('fixed');
   
   
   
      });
   
   
   
    }
   
   
   
   
   
    /* About Us Slider*/
   
   
   
    if(jQuery(".benefit-single").length > 1 ){
   
   
   
     jQuery('#benefit-statmnts').bxSlider({
   
   
   
      mode: 'horizontal',
   
   
   
      slideSelector: '.benefit-single',
   
      useCSS: false,
   
      pager: false,
   
      hideControlOnEnd: true,
   
      easing: 'easeInQuad',
   
      speed: 2000
   
   
   
    })
   
   
   
     ;}  
   
   
   
   
     /* Custom Scroll */
   
   
   
     
   
   
   
     jQuery("#news-post-list").mCustomScrollbar();   
   
   
   
     jQuery(".portfolio-dec-case").mCustomScrollbar();   
   
     jQuery("#portfolio-block #sidebar-columns").mCustomScrollbar();
   
   
   
   
   
   
   
     
   
   
   
   
   
   
   
     
   
   
   
     /* free-tabs */
   
   
   
     
   
   
   
     jQuery('#free-tabs > ul > li > a').click(function(){
   
   
   
   
   
   
   
       jQuery(this).parent('li').siblings().removeClass('ui-state-active-tab');
   
   
   
   
   
   
   
       jQuery(this).parent('li').addClass('ui-state-active-tab')
   
   
   
   
   
   
   
     });
   
   
   
     
   
   
   
   
   
   
   
     
   
   
   
     /* Services Blocks Hover */
   
   
   
     
   
   
   
     jQuery(".service-block").mouseenter(function(){
   
   
   
   
   
   
   
      jQuery(this).closest('.service-block').addClass('hover-block');
   
   
   
   
   
   
   
    }).mouseleave(function(){
   
   
   
   
   
   
   
      jQuery(this).closest('.service-block').removeClass('hover-block');
   
   
   
   
   
   
   
    });
   
   
   
   
   
   
   
    /*free-icon*/
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    if(jQuery( window ).width() > 768 ){
   
   
   
   
   
   
   
      var elemnt = jQuery('.free-stuff-icon');
   
   
   
   
   
   
   
      var offset = elemnt.offset();
   
   
   
   
   
   
   
      //var offset_t = offset.top;
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
      jQuery( window ).scroll(function() {
   
   
   
   
   
   
   
        if(jQuery(window).scrollTop()>  offset.top + 40 ){    
   
   
   
   
   
   
   
          jQuery('.free-stuff-icon').addClass('fixed-free-icon');
   
   
   
   
   
   
   
        }else{
   
   
   
   
   
   
   
          jQuery('.free-stuff-icon').removeClass('fixed-free-icon');
   
   
   
   
   
   
   
        }
   
   
   
        if(jQuery(window).scrollTop() >  jQuery('#free-stuff').offset().top + 528 ){    
   
   
   
   
   
   
   
          jQuery('.free-stuff-icon').addClass('up-arrow-link-in');
   
   
   
   
   
   
   
        }else{
   
   
   
   
   
   
   
          jQuery('.free-stuff-icon').removeClass('up-arrow-link-in');
   
   
   
        }
   
   
   
   
   
   
   
      });
   
   
   
   
   
   
   
    }
   
   
   
   });
   
   
   
   
   function addlabeleffect(elemnt){
   
   
   
    jQuery(elemnt).on({
   
   
   
      focus: function(){
   
   
   
        jQuery(this).closest( "li" ).addClass('transition-label');
   
   
   
      },
   
   
   
      blur: function(){
   
   
   
        if(!jQuery(this).val())
   
   
   
          jQuery(this).closest( "li" ).removeClass('transition-label'); 
   
   
   
      }
   
   
   
    });
   
   
   
   }
   
   
   
</script> 
<script>
   jQuery('.dropdown-link').click(function(event){
     event.preventDefault();
     jQuery('.list-categories').slideToggle();
   
   });
   jQuery( window ).load(function() {
     jQuery('.list-categories .blog-sidebar-categories').click(function(e){  
      jQuery('.list-categories').slideUp();  
    });  
   
   });
   jQuery(".cat-item a").click(function() {
     var text = jQuery(this).html();
     jQuery(".custom-head-cat").html(text);
   });
</script>
<script>
   jQuery('#free-analysis').on( 'click', function(){
     jQuery('html, body').animate({
       scrollTop: jQuery("#scroll-form").offset().top-125
     }, 2000);
   });
   
</script>
<script>
   jQuery(document).ready(function(){  
     jQuery(".pop-btn").click(function(){
       jQuery(".pop-btn").toggleClass("down-btn");
     });
     jQuery(".close-btn.form-close").click(function(){
       jQuery(".pop-btn").removeClass("down-btn");
     });
     jQuery('.dropdown-link').click(function(event){
       event.preventDefault();
       jQuery('.portfolioFilter-main').slideToggle();
   
     });
   });
</script>
<script>
   jQuery("#gform_78").submit(function(event){
    event.preventDefault();
    window.open('https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/Facebook-Targeting-Lead-Magnet.pdf', '_blank');
   });
   jQuery("#gform_79").submit(function(event){
     event.preventDefault();
     window.open('https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/Lead-Magnet-6-Ways-to-Improve-Your-Email-Open-Rate.pdf', '_blank');
   });
   jQuery("#gform_80").submit(function(event){
     event.preventDefault();
     window.open('https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/BC-E-book-How-to-Get-Your-Business-on-the-First-Page-of-Google.pdf', '_blank');
   });
   jQuery("#gform_86").submit(function(event){
     event.preventDefault();
     window.open('https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/11/GAC-Case-Study_17x11_R5_Digital.pdf', '_blank');
   });
</script>
<script>
   jQuery(document).ready(function(){        
   
     jQuery('.ubermenu-tabs-group .uber-menulink').hover(function(){
      t = jQuery(this).index();
    //alert(t1);
    jQuery(this).parent().parent().prev('li').find('.common-ubermenu-content').hide();
    jQuery(this).parent().parent().prev('li').find('.common-ubermenu-content').eq(t).show();
    jQuery('li.sublink-hover').hover(function(){
     t = jQuery(this).index();
   
     jQuery('.uber-subnev-outer .uber-subnav-img').hide();
     jQuery('.uber-subnev-outer .uber-subnav-img').eq(t).show();
     
     jQuery('.uber-subnev-outer2 .uber-subnav-img').hide();
     jQuery('.uber-subnev-outer2 .uber-subnav-img').eq(t).show();
     
     jQuery('.uber-subnev-outer3 .uber-subnav-img').hide();
     jQuery('.uber-subnev-outer3 .uber-subnav-img').eq(t).show();
     
     jQuery('.uber-subnev-outer4 .uber-subnav-img').hide();
     jQuery('.uber-subnev-outer4 .uber-subnav-img').eq(t).show();
     
     jQuery('.uber-subnev-outer5 .uber-subnav-img').hide();
     jQuery('.uber-subnev-outer5 .uber-subnav-img').eq(t).show();
     
     jQuery('.uber-subnev-outer6 .uber-subnav-img').hide();
     jQuery('.uber-subnev-outer6 .uber-subnav-img').eq(t).show();
     
     
   });
   });
     
   });
</script>
<script>
   if (jQuery(window).width() > 300) {
     jQuery(window).bind("scroll", function() {
       if (jQuery(window).scrollTop() >= 40) {
         jQuery("#header, .fixed-header-sec").addClass("fixed-bar");
       } else {
         jQuery("#header, .fixed-header-sec").removeClass("fixed-bar");
       }
     })
   };
</script>
<script>
   jQuery(function() {
     jQuery('#ubermenu-main-2-primary .custom-overlay').hover(function() {
       jQuery('.overlay-nav').fadeIn();
     },
     function(){
       jQuery('.overlay-nav').fadeOut();
     }
     );
   });
</script>
<style>
   #calculate {
   margin: 0 0 15px;
   }
</style>
<!-- Blue Corona Snippet //--> 
<script type="text/javascript">
   jQuery('a[href*="#"]')
   // Remove links that don't actually link to anything
   .not('[href="#"]')
   .not('[href="#0"]')
   .click(function(event) {
     // On-page links
     if (
       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
       && 
       location.hostname == this.hostname
       ) {
       // Figure out element to scroll to
     var target = jQuery(this.hash);
     target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
       // Does a scroll target exist?
       if (target.length) {
         // Only prevent default if animation is actually gonna happen
         event.preventDefault();
         jQuery('html, body').animate({
           scrollTop: target.offset().top-150
         }, 1500, function() {
           // Callback after animation
           // Must change focus!
           var $target = jQuery(target);
           $target.focus();
           if ($target.is(":focus")) { // Checking if the target was focused
             return false;
           } else {
             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
             $target.focus(); // Set focus again
           };
         });
       }
     }
   });
</script>
<script type="text/javascript">
   //<![CDATA[
   
   var DID=196048;
   
   var pcheck=(window.location.protocol == "https:") ? "https://sniff.visistat.com/live.js":"http://stats.visistat.com/live.js";
   
   document.writeln('<scr'+'ipt src="'+pcheck+'" type="text\/javascript"><\/scr'+'ipt>');
   
   //]]>
   
</script>
<script type="text/javascript">
   _linkedin_data_partner_id = "48895";
</script><script type="text/javascript">
   (function(){var s = document.getElementsByTagName("script")[0];
     var b = document.createElement("script");
     b.type = "text/javascript";b.async = true;
     b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
     s.parentNode.insertBefore(b, s);})();
</script>
<script>
   jQuery(document).ready(function(){  
     jQuery('li.sublink-hover').hover(function(){
       t = jQuery(this).index();
   
       jQuery('.left-uber-sec ul.uber-sub-listing .uber-subnav-img').hide();
       jQuery('.left-uber-sec ul.uber-sub-listing .uber-subnav-img').eq(t).show();
   
     });
   });
</script>
<noscript>
   <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=48895&fmt=gif" />
</noscript>
<script>
   jQuery('.center-btn a.book-btn').on( 'click', function(){
     jQuery('html, body').animate({
      scrollTop: jQuery("#schedule-title-scroll").offset().top-120
    }, 1000);
   });
</script>
<script>
   if (jQuery(window).width() <= 1024) {
   
   
    jQuery('.svg-bar').click(function(event){
      event.preventDefault();
      jQuery('.svg-bar').toggleClass('close-toggle');
      jQuery('.mobile-expand-nav').toggleClass('nav-toggle');
      jQuery('body').toggleClass('fixed-body-nav');
      jQuery('.purple-bg').toggleClass('nav-toggle');
      jQuery(".sub-menu").removeClass("toggled-on");
      jQuery(".dropdown-toggle").removeClass("toggled-on");
      jQuery(".dropdown-toggle").prev('a').removeClass("active");
      jQuery(".fixed-header-sec .pop-btn").toggleClass("switch");
    });
   
   
   
    jQuery('#header-nav a').filter(function() {
      return jQuery(this).attr('href') == undefined;
    }).parent().addClass('dead-link-anchor'); 
   
    jQuery("#header-nav .menu-item-has-children > a").after('<button class="dropdown-toggle"></button>');
   
    jQuery('.dropdown-toggle').click(function() {
      jQuery(this).toggleClass("toggled-on");
      jQuery(this).next('.sub-menu').toggleClass("toggled-on");
      jQuery(this).prev('a').toggleClass("active");
    });
   
   
   
    
    
   }
   jQuery( window ).load(function() {
    jQuery("#input_58_7").on('change', function(){
      var custom_value=  jQuery(this).val();
      if(custom_value){
        jQuery('.selectric').addClass('active');
      }else{
        jQuery('.selectric').removeClass('active');  
      }
    });
   });
</script>
<script>
   jQuery(window).scroll(function (event) {
     event.preventDefault();
     if (jQuery(this).scrollTop() > 100) {
       jQuery('.scrollup').fadeIn();
     } else {
       jQuery('.scrollup').fadeOut();
     }
   });
   
   jQuery('.scrollup').click(function () {
     jQuery("html, body").animate({
       scrollTop: 0
     }, 600);
   
   });      
</script>
<script>
   jQuery(".uwpqsf_class").addClass("tracking_field");
   jQuery(".usearchbtn").addClass("tracking_button");
</script>
<script type='application/ld+json'>
   {
     "@context": "http://schema.org",
     "@type": "WebSite",
     "name": "Blue Corona",
     "url": "https://www.bluecorona.com/"
   }
</script>
<?php if (is_page(10) ) { ?>
<script type="application/ld+json">
   { "@context": "https://schema.org",
   "@type": "LocalBusiness",
   "name": "Blue Corona",
   "url": "https://www.bluecorona.com/",
   "logo": "https://www.bluecorona.com/wp-content/themes/bluecorona-2015/images/bluecorona-head-color-logo-lg.png",
   "image": "https://www.bluecorona.com/wp-content/themes/bluecorona-2015/images/bluecorona-head-color-logo-lg.png",
   "telephone": "800.696.4690",
   "sameAs": [
   "https://www.facebook.com/bluecorona",
   "https://twitter.com/bluecorona",
   "https://www.linkedin.com/company/blue-corona",
   "https://plus.google.com/+Bluecorona/posts",
   "https://www.youtube.com/channel/UClA_Ul8TjvXE-D8wLlHqC5A"
   ],
   "hasMap": [
   "https://www.google.com/maps/place/Blue+Corona,+Inc./@39.173878,-77.155872,15z/data=!4m5!3m4!1s0x0:0x3fdd262fa21b0304!8m2!3d39.173878!4d-77.155872",
   "https://www.google.com/maps/place/1401+Central+Ave+%23200,+Charlotte,+NC+28205/@35.2209123,-80.8159964,18z/data=!4m5!3m4!1s0x8856a001433bf5bb:0x66d26f0ab11a11fd!8m2!3d35.2210036!4d-80.8148755"
   ],
   "address": 
   [
   {
     "@type": "PostalAddress",
     "addressLocality": "Gaithersburg",
     "addressRegion": "MD",
     "postalCode":"20879",
     "streetAddress": "7595 Rickenbacker Drive"
   },
   {
     "@type": "PostalAddress",
     "addressLocality": "Charlotte",
     "addressRegion": "NC",
     "postalCode":"28205",
     "streetAddress": "1401 Central Ave, Suite 200-F"
   }
   ],
   "geo": 
   [
   {
     "@type": "GeoCoordinates",
     "latitude": "39.173878",
     "longitude": "-77.155872"
   },
   {
     "@type": "GeoCoordinates",
     "latitude": "35.2209123",
     "longitude": "-80.8159964"
   } 
   ]
   }
</script>
<?php } ?>
<?php if ( is_page(16570) )  { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is property management digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Digital marketing—also known as online marketing—is an umbrella term for all marketing and engagement activities your property management company does on the web. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into sales and returning customers."
       }
     },{
       "@type": "Question",
       "name": "Why should property managers invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "The average landlord or property owner makes 12 online searches before they contact a potential vendor. If you want to connect with them and increase leads and sales, you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What types of online marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite online marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for property managers?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a variety of factors."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "For property management clients with qualifying packages, we generate monthly reports. Don't worry, though; we will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_page(16114) )  { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing for dentists?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is the actual definition of digital marketing? In a nutshell, digital marketing for dentists is an umbrella term for all marketing and engagement activities your dental clinic does through online media channels. The role of digital marketing is to help your clinic get found, get noticed, get leads, and then turn those leads into new patients."
       }
     },{
       "@type": "Question",
       "name": "Why should dentists invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Dentists need digital marketing because 73% of consumers start their search for a dentist with a search engine (like Google). If you want to connect with them and increase leads and sales, you have to meet them online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide dentists?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide a full suite of dental marketing services. This includes SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my dental clinic?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a few things, including your budget, your goals, your market area, and more."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services for dentists cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for dentists with qualifying packages, and our account managers have a reputation for responsiveness and attention to detail. We will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_page(16228) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing for insurance companies?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is the actual definition of digital marketing? In a nutshell, digital marketing—also known as online marketing—is an umbrella term for all marketing and engagement activities done through online media channels. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into new policyholders."
       }
     },{
       "@type": "Question",
       "name": "Why invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "About 97% of consumers in the U.S. go online to find local products and services. If you want to connect with them and increase leads and new policyholders, you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for insurance?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a variety of factors. Once we complete an analysis, we can give you a better picture of the best services for your needs."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for clients and have a reputation for responsiveness and attention to detail. We will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(14792) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is HVAC SEO?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "HVAC SEO is the process of creating and editing website content and code so that your website ranks well in search engines like Google, Bing, and Yahoo. To optimize your website for search, make it fast, secure, mobile-friendly, and full of unique, remarkable content. Then you must gain citations, links, and references from local directories and other websites."
       }
     },{
       "@type": "Question",
       "name": "What’s included in HVAC SEO services?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "With your HVAC SEO services, you get a digital competitive analysis, website content and code optimization, new website content, local SEO, measurement and tracking reporting, and continual tweaking."
       }
     },{
       "@type": "Question",
       "name": "Should I hire an SEO company?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "An SEO company handles the day-to-day tasks of monitoring your online presence so you can focus on other aspects of your HVAC business. If you don’t have the time or resources to comb through pages upon pages of analytical data, rankings, and traffic patterns and then have the means to optimize accordingly, you need an SEO company."
       }
     },{
       "@type": "Question",
       "name": "How long does SEO for HVAC take?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Our HVAC clients can typically see results within six months of starting. Be patient, though—SEO takes a while to take effect, but the results will snowball once you get going."
       }
     },{
       "@type": "Question",
       "name": "How does Blue Corona track SEO success?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "If you can't measure it, you can't manage it. You can't win the game if you don't know the score.  Most HVAC marketing companies treat tracking and reporting as an afterthought—the last step. At Blue Corona, it's the first step in every SEO project."
       }
     },{
       "@type": "Question",
       "name": "Is Blue Corona a certified Google Partner?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Yes."
       }
     },{
       "@type": "Question",
       "name": "Is Blue Corona experienced with the HVAC industry?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Yes. Blue Corona caters to HVAC, plumbing, and home services companies, and we are THE authority in SEO for HVAC. We have more than 10 years of experience helping HVAC contractors grow their businesses. Check out our case studies and see!"
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(15221) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is digital marketing for plumbers?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "Digital marketing for plumbers—also known as online marketing—is a term we use to describe all marketing strategies that take place online. This can include pay per click (PPC) advertising, search engine optimization (SEO), online video, social media, your website, listings on plumbing directories like Angie's List and HomeAdvisor, online content like blogs, email marketing, and more."
   }
   },{
   "@type": "Question",
   "name": "Why should plumbers invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Plumbers should invest in digital marketing because when 97% of people need a plumber, the first place they look for one is online. If your plumbing company doesn't have a better online presence than your competitor, you are almost guaranteed to lose out on leads and new booked jobs."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide for plumbers?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide full-suite digital marketing services for plumbers. This includes everything from SEO, PPC, and website design to social media, phone tracking, and instant chat services."
   }
   },{
   "@type": "Question",
   "name": "Which online marketing services are best for my business?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Your plumbing company will most likely need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on your goals, your service area, your budget, and other factors."
   }
   },{
   "@type": "Question",
   "name": "How much do digital marketing services cost?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Depending on the package you choose, plumber marketing services can run anywhere from $2,500 to over $10,000 per month."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Our plumbing clients with qualifying packages get monthly reports. You also don't need to worry about miscommunication; our account managers bend over backward for you, and we will establish reporting and communication expectations during our first intake call."
   }
   }]
   }
</script>
<?php if ( is_single(15225) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is digital marketing for window and door companies?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "What is the actual definition of digital marketing for window and door? In a nutshell, digital marketing—also known as online marketing—is an umbrella term for all window and door marketing and advertising activities done online. This includes your website, social media, online ads, and more. The role of digital marketing is to help your company get window and door leads, and then turn those leads into sales and returning customers."
   }
   },{
   "@type": "Question",
   "name": "Why invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Window and door companies should invest in digital marketing because 97% of consumers in the U.S. go online to find local windows and windows and doors as well as installation and replacement services. If you want to connect with them and increase window and door leads and sales, you have to meet them where they spend their time—online."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide full-suite digital marketing for window and door. This includes SEO, website design, PPC, social media, email marketing, website chat services, analytics and tracking, video marketing, and more."
   }
   },{
   "@type": "Question",
   "name": "Which online marketing services are best for my business?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Most window and door companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your company will depend on a variety of factors including your budget, your service area, and more."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We generate monthly reports for qualifying window and door clients and have a reputation for responsiveness and attention to detail. We always make sure to establish reporting and communication expectations during our intake call."
   }
   }]
   }
</script>
<?php } ?>
<?php } ?>
<?php if ( is_single(15215) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is contractor digital marketing?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "What is contractor digital marketing? Contractor digital marketing—also known as online marketing—is an umbrella term for all marketing and engagement activities your contracting company does online. This includes your website, your Google My Business profile, your social media efforts, email marketing, any content you write, videos you shoot, etc."
   }
   },{
   "@type": "Question",
   "name": "Why should you invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Contractors should invest in digital marketing because when consumers need a contractor, about 97% of them start their search online, frequently with a search engine. If you want to connect with them and increase leads and booked jobs, you have to have a stronger online presence than your competitors."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide contractors?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide full-suite digital marketing services for contractors. This includes SEO, local SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
   }
   },{
   "@type": "Question",
   "name": "Which online marketing services are best for contractors?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Most contractors need SEO, PPC, and website design as core services. Depending on your goals, budget, service area, and needs, you could also benefit from email marketing, Local Services ads, social media advertising, video, and other online strategies."
   }
   },{
   "@type": "Question",
   "name": "How much do digital marketing services for contractors cost?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Depending on the contractor marketing package you choose and your needs, services can cost from $2,500 to over $10,000 per month."
   }
   },{
   "@type": "Question",
   "name": "What is inbound marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Inbound marketing for contractors refers to all the marketing strategies that attract or pull in prospective clients or customers. These strategies include content marketing, pay per click (PPC) advertising, search engine optimization (SEO), and social media, among others. Inbound marketing strategies are different than traditional marketing strategies such as billboards, cold calling, direct mail, print, radio, tradeshows, TV, etc. that interrupt people by pushing commercial messages on them."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We generate monthly reports for contracting clients with qualifying packages and we have a reputation for responsiveness and attention to detail. You and your account manager will set reporting and communication expectations during our intake call so there are no misunderstandings."
   }
   }]
   }
</script>
<?php } ?>
<?php if ( is_single(15219) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is HVAC digital marketing?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "When we talk about digital marketing for HVAC companies, we're talking about all the marketing and customer engagement activities you do through online media channels. This includes your website, social media channels, email marketing, video marketing, online articles, your profiles on directories like Angie's List, HomeAdvisor, Nextdoor, and Google, and online ads like Google Local Services ads and other pay per click ads."
   }
   },{
   "@type": "Question",
   "name": "Why should HVAC contractors invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "HVAC contractors should invest in digital marketing because homeowners and property managers look online first when they need HVAC services. If you want to make sure they choose your HVAC company, they need to be able to find you online before they find your competitors."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide to HVAC companies?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide full-suite digital marketing services for HVAC contractors. This includes web design, search engine optimization (SEO), pay per click advertising (PPC), social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding, among others."
   }
   },{
   "@type": "Question",
   "name": "Which online marketing services are best for my business?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Most HVAC companies can benefit from SEO, web design, and PPC as core services. Beyond that, the services that are best for your business will depend on your service area, HVAC services, goals, and budget."
   }
   },{
   "@type": "Question",
   "name": "How much do digital marketing services cost?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Depending on the package you choose, marketing services for HVAC companies can run anywhere from $2,500 to over $10,000 per month."
   }
   },{
   "@type": "Question",
   "name": "What is inbound marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Inbound marketing refers to digital marketing strategies that pull people in by providing them content that they want to see at the moment they want to see it. HVAC inbound marketing tactics include content marketing, pay per click (PPC) advertising, search engine optimization (SEO), and social media. Inbound marketing strategies stand in sharp contrast to so-called traditional marketing strategies that push your message out, like billboards, cold calling, direct mail, print, radio, tradeshows, TV ads, etc."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "With a qualifying package, we will generate monthly reports for your HVAC company. Expectations for communication and reporting processes are always discussed during our intake call."
   }
   }]
   }
</script>
<?php } ?>
<?php if ( is_single(15218) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing for builders?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is the actual definition of digital marketing? To break it down, digital marketing for home builders is an umbrella term for all marketing and engagement activities your home building company does online. When successful, digital marketing connects with homebuyers, converts them to leads, and then turns those leads into life-long customers."
       }
     },{
       "@type": "Question",
       "name": "Why should home builders invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most homebuyers or homeowners looking to build their own new home start their search for a contractor online. If you want to connect with your target audience, you have to catch their attention where they spend their time—on the web."
       }
     },{
       "@type": "Question",
       "name": "What home builder marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide a comprehensive set of digital marketing services to home builders and building contractors, including SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for builders?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most builders will need some type of SEO, website design, and paid ads as core services. Beyond that, which services are best for your business depends on a variety of factors. Your market area, services, and goals, for example, can all affect the services you need."
       }
     },{
       "@type": "Question",
       "name": "How much does digital marketing cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services for home builders usually run from $2,500 to over $10,000 per month."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(13849) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is franchise digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Digital marketing for franchises includes all marketing and engagement activities done through online media channels. The role digital marketing plays in your franchise marketing plan is to help you generate awareness, website traffic, leads, and sales from the web."
       }
     },{
       "@type": "Question",
       "name": "Why should franchises invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Franchises should invest in digital marketing because 97% of U.S. consumers go online to find products and services in their area. To turn them into new customers, you need to be in all the places they spend their time—the search engines, social media, on your website, and all other online places they visit."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We offer a full suite of franchise marketing services, including SEO, PPC, web design, social media marketing, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my franchise?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most franchises will need SEO, Local SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a few things, including your goals, market area, target audience, and more."
       }
     },{
       "@type": "Question",
       "name": "How much does digital marketing for franchises cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, franchise marketing packages can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for franchise owners. You can be sure you're in good hands because our account managers have a reputation for responsiveness and attention to detail. We always establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(17242) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is digital marketing for lawyers?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "What exactly is digital marketing? Attorney digital marketing includes any and all marketing activities that happen online. That includes your website, your online content, your social media profiles, the emails you send, and any online ads you take out. When done successfully, digital marketing for lawyers increases leads and new clients to your law firm."
   }
   },{
   "@type": "Question",
   "name": "Why should attorneys invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "When people need an attorney, about 97% of them go online to find a local law firm. If you want to connect with these potential clients, you have to meet them where they spend their time looking for legal services—online."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide attorneys?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide a complete list of attorney marketing services, including, SEO, PPC, website design, social media, analytics and tracking, email marketing, instant chat services, video marketing, and more."
   }
   },{
   "@type": "Question",
   "name": "Which online marketing services are best for my law firm?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Which marketing services are best for your law firm will depend on a few things, including your budget and goals, among others. Our legal clients seeing the best results currently invest in a variety of services, including website design, PPC, SEO, content marketing, email marketing, and others."
   }
   },{
   "@type": "Question",
   "name": "How much do digital marketing services cost?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Depending on the package you choose, marketing services for law firms can run anywhere from $2,500 to over $10,000 per month."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "For attorneys with qualifying packages, we generate monthly reports. All our account managers have a reputation for responsiveness and attention to detail, so you can be sure you're in the best hands. To eliminate errors, we will establish reporting and communication expectations with you during our intake call."
   }
   }]
   }
</script>
<?php } ?>
<?php if ( is_single(14808) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is SEO for electricians?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "SEO for electricians is the process of editing and creating website content and code that ranks well on search engines like Google, Bing, and Yahoo. First, your website must be coded so search engines can find and crawl it. Your website also needs to be fast, secure, and mobile friendly. Second, you need web page after web page of unique, remarkable, and optimized content. Third, you must gain citations, links, and references from other relevant and authoritative websites."
       }
     },{
       "@type": "Question",
       "name": "What’s included in SEO services for electricians?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "In all SEO packages, we include a digital competitive analysis, website content and code optimization, new website content, local SEO, measurement and tracking reporting, and continual tweaking."
       }
     },{
       "@type": "Question",
       "name": "Should I hire an SEO company?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "An SEO company handles the day-to-day tasks of monitoring your online presence so you can focus on other aspects of your business. If your electrical company doesn’t have the time or resources to comb through pages upon pages of analytical data, rankings, and traffic patterns and then have the means to optimize accordingly, you need an SEO company."
       }
     },{
       "@type": "Question",
       "name": "How long does SEO take?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "If you’ve got a good electrical SEO partner, you can generally see results between 3-6 months, but certain industries with highly competitive keywords can take up to a year to see traction. Don’t give up, though—once you get going, your results will snowball."
       }
     },{
       "@type": "Question",
       "name": "How does Blue Corona track SEO success?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "If you can't measure it, you can't manage it. You can't win the game if you don't know the score. Despite a million quotes that suggest that you can't maximize your business success unless you track your results, most business owners and marketers are still not accurately tracking their advertising, marketing, website, or SEO. Most online marketing companies treat tracking and reporting as an afterthought—the last step. At Blue Corona, it's the first step in every SEO engagement."
       }
     },{
       "@type": "Question",
       "name": "Is Blue Corona a certified Google Partner?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Yes."
       }
     },{
       "@type": "Question",
       "name": "Is Blue Corona experienced with electricians and electrical companies?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Yes. Blue Corona's core audience is home services, and we are THE authority in electrician SEO. We have more than 10 years of experience helping electrical contractors grow their businesses. Check out our case studies and see!"
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(14793) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is SEO for plumbers?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "SEO for plumbers is the process of editing and creating website content and code that ranks your website on search engines like Google, Bing, and Yahoo. First, your plumbing website must be coded in a way that search engines can find and crawl it. To rank at the top of search engines, you not only need page after page of compelling website content, but your website also needs to be secure, frictionless, fast, and mobile friendly."
       }
     },{
       "@type": "Question",
       "name": "What’s included in plumber SEO services?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "In your plumbing SEO package, you'll get a digital competitive analysis, website content and code optimization, new website content, local SEO, measurement and tracking reporting, and continual tweaking."
       }
     },{
       "@type": "Question",
       "name": "Should I hire a plumbing SEO company?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "An SEO company handles the day-to-day tasks of monitoring your plumbing company's online presence. If your business doesn’t have the resources or the time to comb through stacks of analytical data, rankings, and traffic patterns, you need a plumbing SEO company."
       }
     },{
       "@type": "Question",
       "name": "How long does SEO take for plumbing companies?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "If you’ve got a good plumbing SEO partner, you can generally see results between 3-6 months. If you haven't seen movement by then, don’t give up—a lot goes on behind the scenes, and the true measure of success is organic leads and newly booked jobs."
       }
     },{
       "@type": "Question",
       "name": "Is Blue Corona a certified Google Partner?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Yes."
       }
     },{
       "@type": "Question",
       "name": "Is Blue Corona experienced with the plumbing industry?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Yes. Blue Corona's core audience is plumbing, HVAC, and home services, and we've been helping plumbing companies rank higher in the search results for more than 10 years. We are THE authority in plumber marketing! Check out our case studies and see!"
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(17179) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing in construction?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Digital marketing for construction includes all marketing and communication activities your company does through online media channels. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into sales and returning customers."
       }
     },{
       "@type": "Question",
       "name": "Why invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "About 71% of commercial buyers begin their research for a construction company online. If you want to connect with them and increase leads and sales, you have to have a commanding and persuasive digital presence."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for construction?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a few things, including your goals and your market area."
       }
     },{
       "@type": "Question",
       "name": "How much do construction marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for clients and have a reputation for responsiveness and attention to detail. We will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(15217) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is digital marketing?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "What is the actual definition of digital marketing? In a nutshell, digital marketing—also known as online marketing—is an umbrella term for all your fire protection marketing and engagement activities done online. The role of digital marketing is to help your fire protection company get found, get noticed, get leads, and then turn those leads into sales and loyal customers."
   }
   },{
   "@type": "Question",
   "name": "Why should fire protection companies invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "If you're a fire protection company, you need digital marketing because that's where your target audience looks for your services. Approximately 71% of B2B buyers begin their research with generic Google searches. If you want to connect with them and increase leads and sales, you have to have a better online presence than any of your competitors."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide full-suite digital marketing services for fire protection companies. That includes (but isn't limited to) SEO, website design, PPC advertising, social media ads, email newsletter, instant chat services, analytics and tracking, and video marketing."
   }
   },{
   "@type": "Question",
   "name": "Which marketing services are best for fire protection companies?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "The services that will be best for your business depends on a few things, including your budget and your goals. We do recommend all fire protection companies invest in SEO, website design, and PPC services."
   }
   },{
   "@type": "Question",
   "name": "How much do digital marketing services cost?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We generate monthly reports for clients with qualifying packages and will establish reporting and communication expectations during our intake call. You don't have to worry though; we have a reputation for responsiveness and attention to detail!"
   }
   }]
   }
</script>
<?php } ?>
<?php if ( is_single(15222) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "What is online marketing for remodelers?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "In a nutshell, online marketing—also known as digital marketing—includes all the marketing and engagement activities your remodeling company does through online media channels. The goal of digital marketing for remodelers is to help homeowners find and choose your company over your competitors."
   }
   },{
   "@type": "Question",
   "name": "Why should remodelers invest in digital marketing?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "When homeowners need remodeling services, their search begins online, frequently with a search engine. They plan their remodels on social media sites like Pinterest and Instagram, and they ask for recommendations on sites Nextdoor and Facebook. They watch online videos, read reviews, and choose their remodeling company based on the company's online presence."
   }
   },{
   "@type": "Question",
   "name": "What digital marketing services do you provide remodelers?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We provide a full spread of digital marketing services for remodelers. This includes SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
   }
   },{
   "@type": "Question",
   "name": "Which online marketing services are best for remodeling contractors?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Most of our remodeling clients benefit from web design, social media, SEO, and PPC, but which services are best will depend on your service area, remodeling services, budget, goals, etc."
   }
   },{
   "@type": "Question",
   "name": "How much do digital marketing services cost?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Depending on the package you choose, remodeling marketing services can run anywhere from $2,500 to over $10,000 per month."
   }
   },{
   "@type": "Question",
   "name": "What is your reporting and communication process?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "We generate monthly reports for remodeling clients with qualifying packages and we have a reputation for responsiveness and attention to detail. Your account manager will establish reporting and communication expectations during your intake call."
   }
   }]
   }
</script>
<?php } ?>
<?php if ( is_single(15588) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
     "@type": "Question",
     "name": "How fast should my website load?",
     "acceptedAnswer": {
     "@type": "Answer",
     "text": "According to Google, 'two seconds is the threshold for ecommerce website acceptability. At Google, we aim for under a half-second.' However,  the answer isn’t really as cut-and-dry as that. Saying 'my website loads in X.X seconds,' is distorted from reality. Why? Website speed is a fluid concept, for two reasons:
     <ul>
       <li><strong>Webpages don’t load all at once—they load piece-by-piece</strong></li>
       <li><strong>Website speed varies from user to user, depending on each user’s browser, device, and internet speed</strong></li>
     </ul>"
   }
   },{
   "@type": "Question",
   "name": "What Is Page Load Time (or Web Page Speed) and How Is It Measured?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Generally speaking, a website page load time is the time it takes for someone to see the content after they’ve landed on a webpage.
   If you want to get more detailed, web page speed can be divided into two different categories: First Contentful Paint (FCP) and DOMContent Loaded (DCL)."
   }
   },{
   "@type": "Question",
   "name": "What Is a webpage's First Contentful Paint (FCP)?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "First Contentful Paint (FCP) is the time it takes for you to see the first piece on content on a webpage after you’ve landed there.
   Typically, webpages load each element individually, but not all at the same time. Have you ever clicked on a webpage to find that the top half has loaded, but the bottom half is still working on it? Or have you landed on a web page where some parts appear first, and then more detailed parts appear second? Then you’ve experienced First Contentful Paint (FCP)."
   }
   },{
   "@type": "Question",
   "name": "What Is a Webpage's DOMContent Loaded (DCL)?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "The various parts of a webpage don’t load all at once. DOMContent Loaded (DCL) is the time it takes for every bit of code on the top and bottom of a web page to load. That includes everything in the First Contentful Paint (FCP) and everything else that comes after."
   }
   },{
   "@type": "Question",
   "name": "How Is Web Page Speed Measured?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "You need to stop thinking of your website speed as a fixed number. Why? Because there’s a difference in what objective data tells you and how it’s actually experienced in the real world.
   Google said it best:
   '…load is not a single moment in time—it’s an experience that no one metric can fully capture. There are multiple moments during the load experience that can affect whether a user perceives it as ‘fast’, and if you just focus on one you might miss bad experiences that happen during the rest of the time.'"
   }
   },{
   "@type": "Question",
   "name": "What Is the Average Page Load Time for Websites in the United States?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "If you’re married to thinking of page speed in terms of seconds, I’ll give you this: According to a recent Unbounce Page Speed Report, the average website load time in 2019 is 15 seconds.
   The average load time of the top ranking websites in Google is under three seconds, and considering 57% of people leave a page that takes longer than three seconds to load, you have an enormous opportunity to increase website traffic just by increasing site speed. People are impatient, and with the rise of micro-moments, they want everything INSTANTLY."
   }
   },{
   "@type": "Question",
   "name": "Why Would a Website Have a Slow Page Load Time?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "Most of a page’s load time—80%, in fact—is spent rendering all the different coded elements on a page. Each element on your website has a certain “weight.” This includes everything from style sheets and plugins to contact forms and images. The more unoptimized elements you have on your webpages, the “heavier” it is. The “heavier” it is, the longer it’s going to take to render."
   }
   },{
   "@type": "Question",
   "name": "What's the average weight of web pages in the United States?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "3.2 MB"
   }
   },{
   "@type": "Question",
   "name": "How Do I Decrease My Website's Average Page Load Time?",
   "acceptedAnswer": {
   "@type": "Answer",
   "text": "If you want to decrease page load time for all users, consider looking for, fixing, and optimizing the following:
   <ul>
   <li>an unresponsive website (non-mobile-friendly)</li>
   <li>A lot of 301 redirects</li>
   <li>Compression enablement</li>
   <li>Slow server response time</li>
   <li>Website caching for images and resources</li>
   <li>Too many resources or elements on a page</li>
   <li>Unoptimized images</li>
   <li>Unoptimized CSS</li>
   <li>A lot of render-blocking JavaScripts</li>
   <li>Using the synchronous version of a script</li>
   <li>Having too many plugins</li>
   <li>Website isn't responsive of the viewport isn't correctly sized</li>
   <li>Too-small font sizes</li>
   <li>Typography that isn’t search-engine-friendly</li>
   </ul>"
   }
   }]
   }
</script>
<?php } ?>
<?php if(is_page(3758)) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is the actual definition of digital marketing? In a nutshell, digital marketing—also known as online marketing—is an umbrella term for all marketing and engagement activities done through online media channels. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into sales and returning customers."
       }
     },{
       "@type": "Question",
       "name": "Why invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "About 97% of consumers in the U.S. go online to find local products and services. If you want to connect with them and increase leads and sales, you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my business?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a few things, including your budget, your goals, your product/service, and your target audience, among other factors."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is inbound marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Inbound marketing refers to marketing strategies such as content marketing, pay per click (PPC) advertising, search engine optimization (SEO), and social media that attract or pull prospective clients/customers in at an exact moment of interest or intent. Inbound marketing strategies stand in sharp contrast to so-called traditional marketing strategies such as billboards, cold calling, direct mail, print, radio, tradeshows, TV, etc. that interrupt (often uninterested) people by pushing (typically unwanted) messages to them."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for qualifying clients and have a reputation for responsiveness and attention to detail. We will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if(is_page(16099)) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is the actual definition of digital marketing? In a nutshell, digital marketing for real estate—also known as online marketing—is an umbrella term for all marketing and engagement activities done through online media channels. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into sold homes."
       }
     },{
       "@type": "Question",
       "name": "Why should realtors invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "About 83% of all home buyers use the internet to search for homes, and 44% of homebuyers looked for properties online first. If you want to connect with them and sell more homes, you have to meet them where they look for homes—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide realtors?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing services for real estate. This includes but isn't limited to SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my real estate agency?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on the information we gather in the audit phase."
       }
     },{
       "@type": "Question",
       "name": "How much does real estate marketing cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, real estate marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for qualifying real estate clients, and we establish communication processes early so there are no gaps in expectations. All our account managers have a reputation for responsiveness and attention to detail."
       }
     }]
   }
</script>
<?php } ?>
<?php if(is_page(15982)) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "Why invest in digital marketing for pest control?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "About 97% of consumers in the U.S. go online to find local products and services. If you want to connect with them and increase leads and sales, you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which internet marketing services are best for my pest control company?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most companies will need SEO, PPC, and website design as core services. Beyond that, which services are best for your business depends on a few things, which we will explore in our initial audit of your site."
       }
     },{
       "@type": "Question",
       "name": "How much do pest control marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, pest control marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What's your process for communication and reporting?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for pest control companies with qualifying packages.  We will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(17253) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing in financial services?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Online marketing is an umbrella term for all financial marketing and engagement activities done online. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into sales and returning customers."
       }
     },{
       "@type": "Question",
       "name": "Why should financial advisors invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "About 97% of consumers in the U.S. go online to find local financial services. If you want to connect with these customers and increase leads and new clients, you have to meet them where they spend their time—on the web."
       }
     },{
       "@type": "Question",
       "name": "What financial marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite financial digital marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding"
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my financial services company?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most financial services businesses will need website design services, SEO, and pay per click as a foundation. A competitive analysis of your landscape will then determine which digital marketing services would benefit you the most."
       }
     },{
       "@type": "Question",
       "name": "How much does digital marketing cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the services package you choose, financial marketing can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is inbound marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Inbound marketing refers to financial marketing strategies that attract or pull prospective clients/customers at an exact moment of interest or intent. Inbound differs from outbound because marketing strategies such as billboards, cold calling, direct mail, print, radio, tradeshows, TV, etc. that interrupt (often uninterested) people by pushing (typically unwanted) messages to them."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for clients and have a reputation for responsiveness and attention to detail. We will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(15992) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing for healthcare?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Digital marketing for healthcare is a term that refers to all marketing and engagement activities done through online media channels, including your website, your social media profiles, and your online footprint. When done right, digital marketing for healthcare services should promote you as the authority for what you do, where you do it, increasing leads and new patients in the process."
       }
     },{
       "@type": "Question",
       "name": "Why should healthcare facilities invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Every healthcare facility should invest in digital marketing because 73% of consumers use online search engines to research medical treatments. If you want to connect with these consumers and turn them into patients you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide for healthcare?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite healthcare digital marketing, including SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my facility?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most healthcare services and facilities typically need a combination of core services, including SEO, pay per click, and website design. A deep-dive into your current marketing landscape will help us know which other services you'd benefit the most from."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We create monthly reports for clients with qualifying packages, and we are well known for our responsiveness and attention to detail. As a commitment to excellence, we will establish communication and reporting expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(18920) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing for medical devices?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is the actual definition of digital marketing? In a nutshell, digital marketing—also known as online marketing—is an umbrella term for all medical device marketing and engagement activities done through online media channels. The role of digital marketing is to help you get found, get noticed, get leads, and then turn those leads into sales and returning customers."
       }
     },{
       "@type": "Question",
       "name": "Why invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "71% of medical buyers begin their research with generic Google searches, and 62% say they can finalize their purchase selection criteria based on digital content alone If you want to connect with them and increase leads and sales, you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing, SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, and branding."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services cost?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Depending on the package you choose, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is inbound marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Inbound marketing for medical equipment refers to medical device marketing strategies such as content marketing, pay per click (PPC) advertising, search engine optimization (SEO), and social media that attract or pull prospective clients/customers in at an exact moment of interest or intent. Inbound marketing strategies stand in sharp contrast to so-called traditional marketing strategies such as billboards, cold calling, direct mail, print, radio, tradeshows, TV, etc. that interrupt (often uninterested) people by pushing (typically unwanted) messages to them."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for clients with qualifying packages, and we are well known for our responsiveness and attention to detail. Don't worry, though! To avoid crossed wires, we will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>
<?php if ( is_single(18719) ) { ?>
<script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "FAQPage",
     "mainEntity": [{
       "@type": "Question",
       "name": "What is digital marketing for doctors?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "What is online marketing? In a nutshell, online marketing is an umbrella term for all marketing and engagement activities done through online media channels like social media or on a website. The role digital marketing plays for doctors is to help your practice get found, get noticed, get leads, and then turn those leads into new patients."
       }
     },{
       "@type": "Question",
       "name": "Why should doctors invest in digital marketing?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Each month, consumers in the U.S. perform more than 4.7 million online searches for local doctors. If you want to connect with these consumers and turn them into patients you have to meet them where they spend their time—online."
       }
     },{
       "@type": "Question",
       "name": "What digital marketing services do you provide doctors?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We provide full-suite digital marketing for doctors. This includes SEO, website design, PPC, social media, email marketing, instant chat services, analytics and tracking, video marketing, branding, and more."
       }
     },{
       "@type": "Question",
       "name": "Which online marketing services are best for my practice?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "Most doctors need a combination of at least SEO, pay per click, and website design as core services. A deep-dive into your current marketing landscape will help us know which services you'd benefit the most from."
       }
     },{
       "@type": "Question",
       "name": "How much do digital marketing services cost doctors?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "It depends on your needs and where your online presence stands. Typically, marketing services can run anywhere from $2,500 to over $10,000 per month."
       }
     },{
       "@type": "Question",
       "name": "What is your reporting and communication process?",
       "acceptedAnswer": {
         "@type": "Answer",
         "text": "We generate monthly reports for doctors with qualifying packages, and we are well known for our responsiveness and attention to detail. Don't worry, though! To avoid crossed wires, we will establish reporting and communication expectations during our intake call."
       }
     }]
   }
</script>
<?php } ?>  
<?php if(is_page(18954)) { ?>
<script>
   jQuery( document ).ready(function() {
   
   
   
   
   
   
   
    jQuery(".gravity-multisteps").fadeOut("slow"); 
    jQuery('.step-btn .button').click(function(){  
   
   
     if (jQuery('#input-url').val().length == 0) {
       jQuery('.alert').addClass('validation-warning');
   
   
   
     } else {
   
       jQuery('.steps-main').addClass("step-active");
       jQuery(".gravity-multisteps").fadeIn("slow");
   
       var bla = jQuery('#input-url').val();
       jQuery('#input_96_3').val(bla);
     }
   
   
   
   
   }); 
    jQuery(".show-form").click(function() { 
     jQuery(".step-form-main").fadeOut("slow"); 
   });
    jQuery(".close-form").click(function() { 
     jQuery(".gravity-multisteps").fadeOut("slow");
     jQuery('.steps-main').removeClass("step-active"); 
   });
    
    addlabeleffect('#input-url');
   
   
   });
</script>
<?php } ?>
<script>
   jQuery( document ).ready(function() {
    
   
    jQuery(".gravity-multisteps").fadeOut("slow"); 
    jQuery('.step-btn .button').click(function(){  
   
   
     if (jQuery('#input-url').val().length == 0) {
       jQuery('.alert').addClass('validation-warning');
   
   
   
     } else {
   
       jQuery('.steps-main').addClass("step-active");
       jQuery(".gravity-multisteps").fadeIn("slow");
   
       var bla = jQuery('#input-url').val();
       jQuery('#input_96_3').val(bla);
     }
   
   
   
   
   }); 
    jQuery(".show-form").click(function() { 
     jQuery(".step-form-main").fadeOut("slow"); 
   });
    jQuery(".close-form").click(function() { 
     jQuery(".gravity-multisteps").fadeOut("slow");
     jQuery('.steps-main').removeClass("step-active"); 
   });
   
    addlabeleffect('#input-url');
   
   
   });
</script>
<script type="application/ld+json">
   {
     "@context": {
     "@vocab": "http://schema.org/"
   },
   "@graph": [
   {
     "@id": "https://www.bluecorona.com/",
     "@type": "Organization",
     "name": "Blue Corona",
     "url": "https://www.bluecorona.com/",
     "logo": "https://www.bluecorona.com/wp-content/themes/bluecorona-2015/images/bluecorona-head-color-logo-lg.png",
     "image": "https://www.bluecorona.com/wp-content/themes/bluecorona-2015/images/bluecorona-head-color-logo-lg.png",
     "telephone": "+1-800-696-4690",
     "sameAs": [
     "https://www.facebook.com/bluecorona",
     "https://twitter.com/bluecorona",
     "https://www.linkedin.com/company/blue-corona",
     "https://www.instagram.com/bluecoronainc/",
     "https://www.youtube.com/channel/UClA_Ul8TjvXE-D8wLlHqC5A"]
   },
   {
     "@type": "LocalBusiness",
     "parentOrganization": {
     "name" : "Blue Corona"
   },
   "name" : "Blue Corona",
   "image" : "https://www.bluecorona.com/wp-content/themes/bluecorona-2015/images/bluecorona-head-color-logo-lg.png",
   "address": {
   "@type" : "PostalAddress",
   "addressLocality": "Gaithersburg",
   "addressRegion": "MD",
   "postalCode":"20879",
   "streetAddress": "7595 Rickenbacker Drive",
   "telephone": "+1-301-591-9397"
   },
   "openingHours": [ "Mo-Fr 8:30-17:30" ],
   "priceRange" : "Varies",
   "hasmap" : "https://goo.gl/maps/kiSTAvM2AtVuURp46"
   },
   {
   "@type": "LocalBusiness",
   "parentOrganization": {
   "name" : "Blue Corona"
   },
   "name" : "Blue Corona",
   "image" : "https://www.bluecorona.com/wp-content/themes/bluecorona-2015/images/bluecorona-head-color-logo-lg.png",
   "address": {
   "@type" : "PostalAddress",
   "addressLocality": "Charlotte",
   "addressRegion": "NC",
   "postalCode":"28205",
   "streetAddress": "1401 Central Ave, Suite 200-F",
   "telephone": "+1-704-719-2111"
   },
   "openingHours": [ "Mo-Fr 8:30-17:30" ],
   "priceRange" : "Varies",
   "hasmap" : "https://goo.gl/maps/dnPqd49aRAThBbbH7"
   }
   ]
   }
</script>
<script type='application/ld+json'>
   {
     "@context": "http://schema.org",
     "@type": "WebSite",
     "name": "Blue Corona",
     "url": "https://www.bluecorona.com/"
   }
</script>
<style>
   .faq-strt .sec-title {
   font-size: 31.8333px;
   color: #67b5e8;
   position: relative;
   text-decoration: none;
   font-family: Montserrat-bold;
   }
   .service-inner ul {
   margin: 0;
   padding: 0 15px;
   width: 33.33%;
   }
   .border-top {
   margin: 50px 0 0 0;
   }
   .faq-strt {
   margin: 20px 0;
   display: inline-block;
   width: 100%;
   } 
</style>
</body></html>

