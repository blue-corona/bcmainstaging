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
?>
    <!-- S:Phone Bar -->
    <div id="phone-bar">
	<!-- S:Arrow Link -->
	<div class="arrow-link">
	<div class="arrow-link-in purple-bg">
		<a href="#">
			<div class="down-arrow">
				<span class="left"></span>
				<span class="right"></span>
			</div>
		</a>
	</div>
	</div>
	<!-- E:Arrow Link -->
		<div class="phone">
			<div class="phone-lft">
				<div class="phone-lft-top">Hey, let’s talk</div>
				<div class="phone-lft-btm">877.385.9684</div>
			</div> 
			<div class="phone-rit"><span><img class="white" src="<?php bloginfo( 'template_directory' ); ?>/images/icon-chat.png" /></span></div> 
		</div>
	</div>
    <!-- E:Phone Bar  --> 
    <!-- S:Offices -->
    <div id="offices">
		<div class="content-center">
			<div class="heading drk-txt hr-line wow fadeInDown">BLUE CORONA OFFICES</div>
			<div id="bc-offices">
				
				 <?php dynamic_sidebar('custom_sidebar-2'); ?>
			</div>
		</div>
	</div>
    <!-- E:Offices -->
    <!-- S:Footer -->
    <div id="footer" class="grey-txt wow fadeInUp">
		<div class="content-center"> 
			 <?php if ( !wp_is_mobile() ) {  ?><div class="footer-links"> &copy; <?php echo date('Y'); ?> Blue Corona&nbsp;&nbsp;    |    <a href="#">Sitemap</a>    |    <a href="#">Previous Sites</a> </div> <?php }  ?>
			<div class="footer-social">
				<ul>
					<li><a href="#"><span class="white-txt fa fa-facebook"></span></a></li>
					<li><a href="#"><span class="white-txt fa fa-twitter"></span></a></li>
					<li><a href="#"><span class="white-txt fa fa-linkedin"></span></a></li>
					<li><a href="#"><span class="white-txt fa fa-google-plus"></span></a></li>
					<li><a href="#"><span class="white-txt fa fa-youtube"></span></a></li>
				</ul>
			</div>
			<div class="footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bluecorona-footer-logo.png" alt="Blue corona Logo"/></a></div>

 <?php if ( wp_is_mobile() ) {  ?>
               <div class="footer-links footer-mobile-links"> &copy; <?php echo date('Y'); ?> Blue Corona&nbsp;&nbsp;       <a href="#">Sitemap</a>        <a href="#">Previous Sites</a> </div>
 <?php }  ?>
		</div>
	</div>
    <!-- E:Footer -->
</div>
<!-- E:Main Wrapper -->
<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-ui.tabs.accordion.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/wow.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.easing.1.3.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.bxslider.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.mCustomScrollbar.min.js"></script>
<script>
jQuery("#hide").hide();
jQuery("#show" ).click(function() {
	//jQuery(this).addClass("toogle");
jQuery("#hide" ).slideToggle( "slow" );
});
</script>

 <script>
 var ismobile = <?php if(wp_is_mobile()){ echo '1';}else{echo '0';} ?>;
	jQuery(function() {
			/*class add on menu*/
		jQuery( ".ubermenu-responsive-toggle" ).click(function() {
jQuery( this ).toggleClass( "close-toggle" );
});
			/*content-accs effect*/
	if(jQuery(window).width() <= 1024){
 jQuery('#content-accs') .accordion({
    collapsible: true,heightStyle: "content",
    active: false
  });
   }else{
  jQuery( "#content-accs" ).accordion({
   heightStyle: "content"
  });
   }
		jQuery( "#free-tabs" ).tabs();
		/*Home page imput effect*/
		addlabeleffect('#gform_1 input:not(input[type="button"])');
		addlabeleffect('#gform_2 input:not(input[type="button"])');
		addlabeleffect('#gform_3 input:not(input[type="button"])');
		/*Smooth Scroll*/
		jQuery('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target =jQuery(this.hash);
		  target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			jQuery('html,body').animate({
			  scrollTop: target.offset().top-70
			}, 'slow');
			return false;
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
		jQuery('#benefit-statmnts').bxSlider({
			mode: 'horizontal',
			slideSelector: '.benefit-single',
			useCSS: false,
			pager: false,
			hideControlOnEnd: true,
			easing: 'easeInQuad',
			speed: 2000
		});	
		/* Case Studies*/
		if(ismobile){
			jQuery('#case-blocks').bxSlider({
					mode: 'horizontal',
					slideSelector: '.case-block',
					useCSS: false,
					pager: false,
					hideControlOnEnd: true
				});	
			
			}else{
				jQuery('#case-blocks').bxSlider({
					mode: 'horizontal',
					minSlides: 1,
					maxSlides: 2,
					moveSlides: 1,
					slideWidth: 398,
					slideMargin: 95,
					slideSelector: '.case-block',
					useCSS: false,
					pager: false,
					hideControlOnEnd: true
					//easing: 'easeInQuad',
					//speed: 2000
				});	
				
				}
		
		
		
		/* Home page banner */
		jQuery('.banner-inner').bxSlider({
			mode: 'vertical',
			slideSelector: '.banner-single',
			useCSS: false,
			pager: true,
			hideControlOnEnd: true,
			controls:true,
			//easing: 'easeInQuad',
			//speed: 2000
			onSliderLoad: function(currentIndex){
					 jQuery('.banner-single').eq(currentIndex + 1).children('.overlay ').addClass("animation-overlay");
				},
				onSlideBefore: function($slideElement, oldIndex, newIndex){
					 jQuery('.overlay ').removeClass("animation-overlay");
					 jQuery('.banner-single').eq(newIndex + 1).children('.overlay ').addClass("animation-overlay");
				},
				onSlideAfter: function($slideElement, oldIndex, newIndex){
					 jQuery('.banner-single').eq(newIndex + 1).children('.overlay ').addClass("animation-overlay");
				}
		});		
		/* Custom Scroll */
		jQuery("#blog-post-list").mCustomScrollbar();
		jQuery("#news-post-list").mCustomScrollbar();
		
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
	});
	new WOW().init();
	function addlabeleffect(elemnt){
		jQuery(elemnt).focus(function() {
			jQuery(this).closest( "li" ).addClass('transition-label');
		}).blur(function(){
			if(!jQuery(this).val())
			jQuery(this).closest( "li" ).removeClass('transition-label'); 
		}); 
		
	}
</script>
<?php wp_footer(); ?>

</body>
</html>