<?php ?><!DOCTYPE html><!--[if IE 6]>



<html id="ie6" <?php language_attributes(); ?>>



<![endif]-->



<!--[if IE 7]>



<html id="ie7" <?php language_attributes(); ?>>



<![endif]-->



<!--[if IE 8]>



<html id="ie8" <?php language_attributes(); ?>>



<![endif]-->



<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->



<html <?php language_attributes(); ?>>



<!--<![endif]-->



<head>
<!-- start Omniconvert.com code -->
<link rel="dns-prefetch" href="//app.omniconvert.com"/>    
<script>(function(m,k,t,z){m[z]=m[z]||[];var f=k.getElementsByTagName(t)[0],j=k.createElement(t);j.async=true;j.src='//cdn.omniconvert.com/async/js/e40d47.js';f.parentNode.insertBefore(j,f);})(window,document,'script','_mktz');</script>
<!-- end Omniconvert.com code -->
<!--noptimize-->
<script>
  dataLayer = [];
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PPJ47C');</script>
<!-- End Google Tag Manager -->
<!--/noptimize-->

<meta charset="<?php bloginfo( 'charset' ); ?>" />



<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />



<meta name="format-detection" content="telephone=no">



<title><?php



	// Print the <title> tag based on what is being viewed.



	global $page, $paged;







	wp_title( '|', true, 'right' );







	// Add the blog name.



	bloginfo( 'name' );







	// Add the blog description for the home/front page.



	$site_description = get_bloginfo( 'description', 'display' );



	if ( $site_description && ( is_home() || is_front_page() ) )



		echo " | $site_description";







	// Add a page number if necessary:



	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )



		echo ' | ' . sprintf( __( 'Page %s', 'bluecorona2015' ), max( $paged, $page ) );







	?></title>



<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/bluecorona_favicon.png" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/select-style.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/animate.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/popupwindow.css" />


<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/jquery.mCustomScrollbar.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/like-styles.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/style-2017.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/slick.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/slick-theme.css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php



//if ( wp_is_mobile() ) {



?>



<link rel="stylesheet" media="(max-width: 958px)" href="<?php echo get_template_directory_uri(); ?>/css/max-width-958.css" type="text/css">



<link rel="stylesheet" media="(min-width: 768px) and (max-width: 958px)" href="<?php echo get_template_directory_uri(); ?>/css/min-width-768X958.css" type="text/css">



<link rel="stylesheet" media="(max-width: 767px)" href="<?php echo get_template_directory_uri(); ?>/css/max-width-767.css" type="text/css">



<link rel="stylesheet" media="(max-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/max-width-480.css" type="text/css">







<?php



// }



?>



<!--[if lt IE 9]>



<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>



<![endif]-->



<?php



	/*



	 * We add some JavaScript to pages with the comment form



	 * to support sites with threaded comments (when in use).



	 */



	if ( is_singular() && get_option( 'thread_comments' ) )



		wp_enqueue_script( 'comment-reply' );







	/*



	 * Always have wp_head() just before the closing 



 </head>



	 * tag of your theme, or you will break many plugins, which



	 * generally use this hook to add elements to <head> such



	 * as styles, scripts, and meta tags.



	 */



	wp_enqueue_script( 'jquery' );



	wp_head();



?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bc-2016/style.css">
<script type="application/ld+json">

{  "@context" : "https://schema.org",

"@type" : "WebSite",

"name" : "Blue Corona",

"url" : "https://www.bluecorona.com"

}

</script>
<meta name="verify-a" value="78f84cf8911db4b04f25">
<meta property="fb:pages" content="49079231524" />
<meta name="majestic-site-verification" content="MJ12_e3beac9f-3af4-4221-918b-daa4fc332c3e">

<meta name="norton-safeweb-site-verification" content="gykd66r256nno014fnlstakc4ttw97s3fnxyww6xswk4cixwnum467zsi89a7kwfz7jdsj0yp77e4q537vwfyyw56kd3zopqxuowkhbhme9fzzn0c5azcjfnf97cd0p9" />
<meta property="fb:pages" content="323395869128" />


<meta name="msvalidate.01" content="E2E1E2AAB22F341993AD68858DA49BF8" />



</head>







<body <?php body_class('media-body'); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPJ47C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<?php if ( !is_page_template( 'template-video-portfolio.php' ) ) {?>

<?php } ?>


<!-- S:Main Wrapper -->
<?php $fname = $_REQUEST['fname']?>
<?php if($fname){ ?>
<div class="loading_spinner-wrp">
<img src="https://www.bluecorona.com/wp-content/uploads/2017/05/lodar2.gif" class="loading_spinner">
</div>
 <script>
                     jQuery(window).load(function() {
                         jQuery('html, body').animate({
                             scrollTop: jQuery(".calculate-message").offset().top - 200
                         }, 2000);
                         jQuery('html, body').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                             function(event) {
                                 setTimeout(function() {
                                     jQuery(".loading_spinner-wrp").hide();
                                 }, 1000);
                             });
                     });
                  </script>
<?php } ?>
<div id="main-wrap" class="<?= $_REQUEST['fname']?>">



	<!-- S:Header -->



    <?php $phone_fire= get_field('add_phone');?>
<?php if ( is_single(11293) ) { ?>
    <div class="mobile top-phone"><a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone_fire);?>"><?php echo $phone_fire; ?></a></div>
<?php } else { ?>
    <div class="mobile top-phone"><a href="tel:8006964690">800.696.4690</a></div>
<?php } ?>

	<div id="header">
	<!--<div class="holiday-banner">Our Offices Will Be Closed Monday Dec. 26th 
    <span>For emergencies please call - <span class="desktop-views">877-543-8409</span><span class="mobile-views"><a href="tel:8775438409">877-543-8409</a></span></span></div>-->
	
<?php if(get_field('add_register_block', 11547)){?>
<div id="header-ribbon">
   <div class="content-center">
   <div class="smal-screen">
      <div class="top-left-coln">
	  <div class="display-full"><?php the_field('left_head', 11547); ?></div>
	  <div class="display-small">Free Blue Corona & Google Happy Hour</div>
	  </div>
      <div class="top-right-coln">
         <div class="top-right-text">
            <div class="top-partner-text"><?php the_field('partner_head', 11547); ?>
            </div>
            <div class="top-partner-logo">
               <img src="<?php the_field('partner_image', 11547); ?>">
            </div>
         </div>
         <div class="top-border"></div>
         <div class="right-bottom-text">
            <div class="rt-lt-coln">
               <span class="banner-small-text">You’re invited to attend an exclusive event.</span>
               <span class="banner-date"><?php the_field('event_date', 11547); ?></span>
			   <span class="banner-city display-small"> Charlotte, NC</span>
            </div>
            <div class="regsiter-here">
               <a href="<?php the_field('register_link', 11547); ?>">REGISTER HERE </a>
            </div>
         </div>
      </div>
	  </div>
   </div>
</div>

<?php } ?>
<?php $phone= get_field('emergencies_no', 10846);?>
<?php if(get_field('add_holiday_text', 10846)){?><div id="header-ribbon">
	<div class="top-left"><img src="https://www.bluecorona.com/wp-content/uploads/2016/07/top-logo-1.png" alt=""></div>
<div id="header-ribbon-inner"><?php the_field('text_one', 10846); ?><span class="ribbon-one"><?php the_field('text_two', 10846); ?>
<?php if($phone){ ?>
 <span class="ribbon-desktop"><?php echo $phone; ?></span><span class="ribbon-mobile"><a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?php echo $phone; ?></a></span>
<?php } ?>
</span></div></div><?php } ?>

    	<div id="header-top"> 



        	<div class="content-center">



            	<div class="logo">



					<a class="white-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">

<div itemscope itemtype="https://schema.org/Organization">
						<!--<img itemprop="logo" class="white" src="<?php bloginfo( 'template_directory' ); ?>/images/bluecorona-white-logo.png" alt="Blue corona Logo"/>-->
						<img itemprop="logo" class="white" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAA8CAMAAAB4g1emAAAAllBMVEVMaXH///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9QwCw4AAAAMXRSTlMAsR/2n4Aw4HDQmHlP1Si/2gSRELcB+kHEq+ZI8GjsCAxhOzakIxQa/t1ViIPJjFrN4sTptgAACUxJREFUeNrlm+lyo7wSQJsAiH3fMRgbjPHufv+XuwIcIsBOZubHra+cU1M1ccBqHUtqLcHwnF3u+nYRIoYkFuStA7+DYKumOGWVHNfw9pQywWes3A94a9Zaga8I1Qbel8zG71jJwbs2uYpL+HsiuGrtE+yI37PXmwbOCLnchE/K7GQjFhm8H1WBU4jcwIxtHYY5vBsRjxPSjQNP2NWt9m5tPjN3PXhBZL9Xu5sFshQ6vKas9XfK7QayHHbwLbIJb4OALMYefuB9FvUZspA9/BrWBBl4E34PIrLc4PdQrpAhgV+EhgyrPfweAoIMIizYR0e9WsMbEiED38CUUjOGC1wGb4eADCpMOaY4Yn0s+gMZMeotUGTiwxcK2cDIhsQw4OXJ5XBJcg/mOEchtg1fYyN9aNz9ENe39TymzekBDASRaxmGf5KA8qiGc6xpFDVip7IN/ZXdF58RApAiQwUTzshSVDDlA1nO/WShwBcrlGFERjLoaTwO8JoDE3QyHgiVMFCqIQ6kt2XMeiiguuMDn1oN1aiMRYttis/i3VJHBBMZyDIBsqzMhfpVHjgdEDd/or72Edv4ql3jFtFfzz9oWxXPHD+uKPdUgPdPmqsgohtMYmox4rlXChFTQTzXVG21HdQLHjE+y1eDXhpq7QiIqLjayQ8RlRwRcmQQgGXb4gzDmatLY1KIMQ1+VneouTXUxfSpuzNZXtgZdDQuou0BgGcjqvuxZa/TmIGAvAdwRCxuQW8n87iShqIwjfp78hDt9WNgXyro2NeIPCK4L5czgYIL5JfqsEU0f1bXqMs4QlVEjf2gY2/sm8MCo0bMx4HKIWbTmE33mw8eD2Ofrla9qMj0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
" alt="Blue corona Logo"/>
</div>


<div itemscope itemtype="https://schema.org/Organization">
  						<!--<img itemprop="logo" class="color"  src="<?php bloginfo( 'template_directory' ); ?>/images/bluecorona-head-color-logo-lg.png" alt="Blue corona Logo"/>-->
						<img itemprop="logo" class="color"  src="data:image/png;base64,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
" alt="Blue corona Logo"/>
</div> 

					</a>



				</div>

<div class="top-right">

<div class="search-box">
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                  <input data-id="search-input" type="text" size="put_a_size_here" placeholder="search" name="s" id="s" class="search-input" value=""/>
                  <input type="submit" id="searchsubmit" value="submit" class="search-btn " />
               </form></div>
                <div class="phone">



					<div class="phone-lft">



						<div class="phone-lft-top">Let’s Talk</div>

						<?php if ( is_single(11293) ) { ?>
							<div class="phone-lft-btm"><?php the_field('add_phone'); ?></div>
						<?php } else { ?>
							<div class="phone-lft-btm">800.696.4690</div>
						<?php } ?>
				

					</div> 



<!--					<div class="phone-rit">



						<span>



							<img class="white" src="<?php bloginfo( 'template_directory' ); ?>/images/icon-chat.png" />



							<img class="color" src="<?php bloginfo( 'template_directory' ); ?>/images/icon-chat-lrg.png" />



						</span>



					</div> -->



				</div>
				</div>



            </div>



        </div>

		<?php if(!is_singular("hvac") && !is_page_template("template-landing.php") ) {?> 
		
		



        <div id="header-nav" class="purple-bg"><div class="content-center">
			<div class="lit-blue-bg pop-btn"><span>Get Started</span></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div></div>
		
		<div class="pop-form gravity-form">
	<div class="content-center">
	<div class="close-btn form-close"></div> 
	<div class="form-center">
	<div class="form-heading"><span class="form-icon"></span>Get Started Today</div>
	<?php echo do_shortcode('[gravityform id="62" title="false" description="false" ajax="true" tabindex="32"]'); ?>
                	</div></div></div>

		<?php } ?>



    </div>



    <!-- E:Header -->







