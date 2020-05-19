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


<meta charset="<?php bloginfo( 'charset' ); ?>" />



<meta name="viewport" content="width=device-width, initial-scale=1">



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

<script type="application/ld+json">

{  "@context" : "http://schema.org",

"@type" : "WebSite",

"name" : "Blue Corona",

"url" : "http://www.bluecorona.com"

}

</script>
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
_fbq.push(['addPixelId', '1613531302235226']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1613531302235226&amp;ev=PixelInitialized" /></noscript>

<meta name="verify-a" value="78f84cf8911db4b04f25">
<meta property="fb:pages" content="49079231524" />
<meta name="majestic-site-verification" content="MJ12_e3beac9f-3af4-4221-918b-daa4fc332c3e">

<meta name="norton-safeweb-site-verification" content="gykd66r256nno014fnlstakc4ttw97s3fnxyww6xswk4cixwnum467zsi89a7kwfz7jdsj0yp77e4q537vwfyyw56kd3zopqxuowkhbhme9fzzn0c5azcjfnf97cd0p9" />
<meta property="fb:pages" content="323395869128" />
<meta name="google-site-verification" content="DAdbMdUuqge_hMW6AE9GT-SUSn1cfSuz_At1IVmdnok" />

<meta name="msvalidate.01" content="E2E1E2AAB22F341993AD68858DA49BF8" />

<meta name="google-site-verification" content="Q0ztoU1CblA-y0oeQKeGXP7UKwlOwiwRT0VZ45hr8pI" />

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-3841811-3', 'auto');

  ga('require', 'displayfeatures'); 

  ga('send', 'pageview');



</script>

</head>







<body <?php body_class(); ?>>
 <script>

  window.fbAsyncInit = function() {

    FB.init({

      appId      : '897063303725751',

      xfbml      : true,

      version    : 'v2.5'

    });

  };

 

  (function(d, s, id){

     var js, fjs = d.getElementsByTagName(s)[0];

     if (d.getElementById(id)) {return;}

     js = d.createElement(s); js.id = id;

     js.src = "//connect.facebook.net/en_US/sdk.js";

     fjs.parentNode.insertBefore(js, fjs);

   }(document, 'script', 'facebook-jssdk'));

</script> 




<!-- ClickTale Top part -->

<script type="text/javascript">

var WRInitTime=(new Date()).getTime();

</script>

<!-- ClickTale end of Top part -->



<script type="text/javascript">var _kiq = _kiq || [];</script>

<script type="text/javascript" src="//s3.amazonaws.com/ki.js/15243/2QN.js" async="true"></script>



<script type="text/javascript">var _kiq = _kiq || [];</script>

<script type="text/javascript" src="//s3.amazonaws.com/ki.js/15243/2QN.js" async="true"></script>
<?php if ( !is_page_template( 'template-video-portfolio.php' ) ) {?>

<!-- BEGIN Tynt Script -->

<script type="text/javascript">

if(document.location.protocol=='http:'){

 var Tynt=Tynt||[];Tynt.push('atYlls4T0r4y_Bacwqm_6l');Tynt.i={"ap":"Read more:"};

 (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();

}

</script>

<!-- END Tynt Script -->
<?php } ?>



<!-- begin olark code -->

<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){

f[z]=function(){

(a.s=a.s||[]).push(arguments)};var a=f[z]._={

},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){

f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={

0:+new Date};a.P=function(u){

a.p[u]=new Date-a.p[0]};function s(){

a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){

hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){

return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){

b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{

b.contentWindow[g].open()}catch(w){

c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{

var t=b.contentWindow[g];t.write(p());t.close()}catch(x){

b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({

loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});

/* custom configuration goes here (www.olark.com/documentation) */

olark.identify('5544-559-10-5959');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5544-559-10-5959/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>

<!-- end olark code -->

<script type="text/javascript"> var _ss = _ss || []; _ss.push(['_setDomain', 'https://koi-MOHDJ6.sharpspring.com/net']); _ss.push(['_setAccount', 'KOI-NXXTHQ']); _ss.push(['_trackPageView']); (function() { var ss = document.createElement('script'); ss.type = 'text/javascript'; ss.async = true; ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-MOHDJ6.sharpspring.com/client/ss.js?ver=1.1.1'; var scr = document.getElementsByTagName('script')[0]; scr.parentNode.insertBefore(ss, scr); })(); </script> 



<!-- S:Main Wrapper -->



<div id="main-wrap">



	<!-- S:Header -->



    <div class="mobile top-phone"><a href="tel:8006964690">800.696.4690</a></div>



	<div id="header">
<?php $phone= get_field('emergencies_no', 10846);?>
<?php if(get_field('add_holiday_text', 10846)){?><div id="header-ribbon">
	<div class="top-left"><img src="http://www.bluecorona.com/wp-content/uploads/2016/07/top-logo-1.png" alt=""></div>
<div id="header-ribbon-inner"><?php the_field('text_one', 10846); ?><span class="ribbon-one"><?php the_field('text_two', 10846); ?> <span class="ribbon-desktop"><?php echo $phone; ?></span><span class="ribbon-mobile"><a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?php echo $phone; ?></a></span></span></div></div><?php } ?>

    	<div id="header-top"> 



        	<div class="content-center">



            	<div class="logo">



					<a class="white-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">

<div itemscope itemtype="http://schema.org/Organization">
						<img itemprop="logo" class="white" src="<?php bloginfo( 'template_directory' ); ?>/images/bluecorona-white-logo.png" alt="Blue corona Logo"/>
</div>


<div itemscope itemtype="http://schema.org/Organization">
  						<!--<img itemprop="logo" class="color"  src="<?php bloginfo( 'template_directory' ); ?>/images/bluecorona-head-color-logo-lg.png" alt="Blue corona Logo"/>-->
						<img itemprop="logo" class="color"  src="data:image/png;base64,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
" alt="Blue corona Logo"/>
</div> 

					</a>



				</div>



                <div class="phone">



					<div class="phone-lft">



						<div class="phone-lft-top">Hey, let’s talk</div>



						<div class="phone-lft-btm">800.696.4690</div>



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

		<?php if(!is_singular("hvac") && !is_page_template("template-landing.php") ) {?> 
		
		



        <div id="header-nav" class="purple-bg"><div class="content-center"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div></div>

		<?php } ?>



    </div>



    <!-- E:Header -->







