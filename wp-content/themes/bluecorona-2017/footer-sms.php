?php
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






<!-- S:Offices -->

<?php if(is_singular("hvac")) {?>
<div id="offices" class="hvac-sin">
  <?php } else { ?>
  <div id="offices">
    <?php } ?>
    <div class="content-center">
      <div class="heading drk-txt hr-line wow fadeInDown">BLUE CORONA OFFICES</div>
      <div id="bc-offices">
        <?php dynamic_sidebar('custom_sidebar-2'); ?>
      </div>
      <?php if(!is_singular("hvac")) {?>
      <div id="bc-services-area">
        <div class="bc-services">	
          <?php wp_nav_menu( array('menu' => 'Foorer Menu' )); ?>
          
        </div>
        <div class="contact-area">
          <div class="contact-heading wow fadeInDown"><a href="https://www.bluecorona.com/contact-us">contact</a></div>
          <div class="phone wow fadeInDown">
            <div class="phone-lft">
              <div class="phone-lft-btm"><span>Let’s talk</span>800.696.4690</div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

  <!-- E:Offices --> 
  
  <!-- S:Footer -->
  
  <div id="footer" class="grey-txt wow fadeInUp">
    <div class="content-center">
      <?php if ( !wp_is_mobile() ) {  ?>
      <?php if(is_singular("hvac")) {?>
      <div class="footer-links"> &copy; <?php echo date('Y'); ?> <strong>Blue Corona</strong></div>
      <?php } else { ?>
      <div class="footer-links"> &copy; <?php echo date('Y'); ?> <strong>Blue Corona</strong>&nbsp;&nbsp;    | <a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">Sitemap</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy/">Privacy</a> | <a href="http://2014.bluecorona.com/" target="_blank">Previous Sites</a> </div>
      <?php } ?>
      <?php }  ?>
      <?php if ( wp_is_mobile() ) {  ?>
      <?php if(is_singular("hvac")) {?>
      <div class="footer-links footer-mobile-links"> &copy; <?php echo date('Y'); ?> Blue Corona</div>
      <?php } else { ?>
      <div class="footer-links footer-mobile-links"> &copy; <?php echo date('Y'); ?> Blue Corona&nbsp;&nbsp; <a href="#">Sitemap</a> <a href="#">Previous Sites</a> </div>
      <?php } ?>
      <?php }  ?>
      <?php if(!is_singular("hvac")) {?>
      <div class="footer-social">
        <ul>
          <?php include('social-media.php')?>
        </ul>
      </div>
      <?php } ?>
      <div class="footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bluecorona-head-color-logo-lg.png" alt="Blue corona Logo" width="160" height="38"/></a><a><img src="<?php bloginfo( 'template_directory' ); ?>/images/Inc500-large.jpg" alt="Inc 500 Logo" /></a><a><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo_Inc5000_color.jpg" alt="Inc 5000 Logo" /></a> </div>
      <?php



         if (is_front_page())



         {?>
      <div class="footer-arrow">
        <div class="arrow-link up-arrow-link-in">
          <div class="arrow-link-in  purple-bg "> <a href="#home-banner">
            <div class="down-arrow"> <span class="left"></span> <span class="center"></span> <span class="right"></span> </div>
            </a> </div>
        </div>
      </div>
      <?php } else { ?>
      <div class="footer-arrow">
        <div class="arrow-link up-arrow-link-in">
          <div class="arrow-link-in  purple-bg "> <a href="#sub-container">
            <div class="down-arrow"> <span class="left"></span> <span class="center"></span> <span class="right"></span> </div>
            </a> </div>
        </div>
      </div>
      <?php } ?>
       <div style="clear:both"><p style="font-size:11px; text-align:center; font-style:italic">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. Contact us for complete details.</p></div>
    </div>
  </div>

  
  <!-- E:Footer --> 
  
</div>

<!-- E:Main Wrapper -->




<?php 
if(is_page(array(12776, 13120, 13231)))
{
	?>
<div class="popup1 popup overleydiv">
<div class="popu-form sub-content-form">
<div class="close-icon"><a href="#close"><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/close-icon-1.png"></a></div>
<div class="left-coln"><div class="img-heading">Downloadable Resources</div><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/when-to-use-1.jpg"></div>
<div class="right-coln">
<h3 class="gform_title heading">Download the pdf now!</h3>
<?php echo do_shortcode('[gravityform id=59 title=false description=false ajax=true tabindex=49]'); ?>
</div>
</div>

</div>
<div class="popup2 popup overleydiv">
<div class="popu-form sub-content-form">
<div class="close-icon"><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/close-icon-1.png"></div>
<div class="left-coln"><div class="img-heading">Downloadable Resources</div><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/engage-members-1.jpg"></div>
<div class="right-coln">
<h3 class="gform_title heading">Download the pdf now!</h3>
<?php echo do_shortcode('[gravityform id=60 title=false description=false ajax=true tabindex=49]'); ?>
</div>
</div>

</div>
<div class="popup3 popup overleydiv">
<div class="popu-form sub-content-form">
<div class="close-icon"><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/close-icon-1.png"></div>
<div class="left-coln"><div class="img-heading">Downloadable Resources</div><img src="https://www.bluecorona.com/wp-content/uploads/2017/01/comp-analysis-1.jpg"></div>
<div class="right-coln">
<h3 class="gform_title heading">Download the pdf now!</h3>
<?php echo do_shortcode('[gravityform id=61 title=false description=false ajax=true tabindex=49]'); ?>
</div>
</div>
</div>
	<?php
}
?>




<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-ui.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-ui.tabs.accordion.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.easing.1.3.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.bxslider.js"></script> 
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.mCustomScrollbar.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.isotope.js"></script> 
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.selectric.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jQuery.print.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/slick.min.js"></script>	
<script src="<?php echo get_template_directory_uri(); ?>/bc-2016/js/pie-chart.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bc-2016/js/jquery-asProgress.js" type="text/javascript"></script>

<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=600,width=1200,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
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
    jQuery('.pop-form').fadeIn('slow');
		jQuery('body').addClass('body-overflow');
   
});
jQuery('.form-close').click(function(){   
    jQuery('.pop-form').fadeOut('slow');
	jQuery('body').removeClass('body-overflow');
   
});
jQuery('.partner-logo-sec ul').slick({
		autoplay: true,
		arrows: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		infinite: true,
		dots: false,
		responsive: [
		{
		breakpoint: 768,
		settings: {
		slidesToShow: 2,
		slidesToScroll: 1
		}
		},
		{
		breakpoint: 1024,
		settings: {
		slidesToShow: 3,
		slidesToScroll: 1
		}
		},
		{
		breakpoint: 640,
		settings: {
		slidesToShow: 1,
		slidesToScroll: 1
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
  });
</script>

<script>



   jQuery(document).ready(function(){


	jQuery('#footer a').addClass("footer-link");
	jQuery('.bc-services a').addClass("footer-nav-link");
    jQuery('.list-categories li a').addClass("blog-sidebar-categories");
	
   
  

   



   	 



   jQuery(".team-portfolio .info-button").click(function (e) {



       e.preventDefault();



       jQuery(".team-portfolio").removeClass("team-portfolio-bg");



       jQuery(this).closest('.team-portfolio').addClass('team-portfolio-bg'); // I also tried .parent().addClass



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



     jQuery(function(){



    jQuery('select').selectric();



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



   	jQuery('.arrow-link-in a[href*=#]:not([href=#])').click(function() {



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



   



   	jQuery("#blog-post-list").mCustomScrollbar();



   



   	jQuery("#news-post-list").mCustomScrollbar();		



   	jQuery(".portfolio-dec-case").mCustomScrollbar();		
   	jQuery(".resp-tabs-container .content-acc").mCustomScrollbar();		



   



   	



   



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
jQuery('.dropdown-link').click(function(e){
  e.preventDefault();
  jQuery('.list-categories').slideToggle();
  
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
    jQuery(".pop-btn").addClass("down-btn");
});
jQuery(".close-btn.form-close").click(function(){
    jQuery(".pop-btn").removeClass("down-btn");
});
jQuery('.dropdown-link').click(function(e){
  e.preventDefault();
  jQuery('.portfolioFilter-main').slideToggle();
  
});
});
</script>

<script>
if (jQuery(window).width() > 300) {
        jQuery(window).bind("scroll", function() {
            if (jQuery(window).scrollTop() >= 40) {
                jQuery("#header").addClass("fixed-bar");
            } else {
                jQuery("#header").removeClass("fixed-bar");
            }
        })
		};
</script>
<style>
#calculate {
  margin: 0 0 15px;
}
</style>

<!-- Blue Corona Snippet //--> 

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
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=48895&fmt=gif" />
</noscript>

<script type='application/ld+json'>
{
  "@context": "http://schema.org",
  "@type": "WebSite",
 "name": "Blue Corona",
  "url": "https://www.bluecorona.com/"
}
</script>
</body></html>