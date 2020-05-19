<?php

/*

Template Name: Seo Services

*/ 



get_header();

?>
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
			<div class="seo-service-topic-images text-center"><img class="alignnone size-full wp-image-13936" src="https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/topc-img1.png" alt="" width="511" height="246" /><img class="alignnone size-full wp-image-13937" src="https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/topc-img2.png" alt="" width="250" height="92" />

			<img class="alignnone size-full wp-image-13938" src="https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/topc-img3.png" alt="" width="360" height="120" />

			</div>
			</div>



			<div class="single-content-form single-content-form2 seo-service-topic-form">
			<?php echo do_shortcode('[gravityform id=21 title=false description=false ajax=true tabindex=49]'); ?>
			</div>

			</div>
	</section>

<section class="seo-service-local">
<div class="content-center">
<h2 class="text-center">Our Local SEO Process</h2>
<h4 class="text-center custom-sub-head">At Blue Corona, we offer many services to help your business’s local search engine optimization campaign. These include:</h4>
<div class="service-local-images">
<div class="img-col"><img class="alignnone size-full wp-image-13939" src="https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/service-local1.png" alt="" width="356" height="171" /></div>
<div class="img-col"><img class="alignnone size-full wp-image-13940" src="https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/service-local2.png" alt="" width="354" height="170" /></div>
<div class="img-col"><img class="alignnone size-full wp-image-13941" src="https://mainbluecorona.staging.wpengine.com/wp-content/uploads/2017/07/service-local3.png" alt="" width="355" height="170" /></div>
</div>
<div class="service-local-listing">
<div class="left-sec">
<div class="local-listing-col">
<h4><span>1</span>COMPLETING A LOCAL COMPETITOR ANALYSIS</h4>
<ul>
 	<li>Completing a market analysis of your service areas</li>
 	<li>Finding local competitors currently outranking you on the web for your services</li>
 	<li>Analyzing search terms, monthly search volumes, and more in your market</li>
</ul>
</div>
<div class="local-listing-col">
<h4><span>2</span>BUILDING &amp; MONITORING LOCAL CITATIONS</h4>
<ul>
 	<li>Auditing citations</li>
 	<li>Creating new citations</li>
 	<li>Discovering more local citation opportunities</li>
 	<li>Managing and monitoring local listings</li> 
</ul>
</div>
<div class="local-listing-col">
<h4><span>3</span>PUBLISHING LOCALIZED WEBSITE CONTENT</h4>
<ul>
 	<li>Keyword research to find what and how your customers are searching for your services</li>
 	<li>Publishing locally-targeted website content that improves your local search rankings and provides a seamless user experience</li>
 	<li>Adding microdata to your website (Schema markup) to improve your local business listings, make local reviews more prominent on search result pages, and increase your local SEO</li>
</ul>
</div>
</div>
<div class="right-sec">
<div class="local-listing-col">
<h4><span>4</span>OPTIMIZING &amp; MANAGING GOOGLE MY BUSINESS (GOOGLE+)</h4>
<ul>
 	<li>Optimizing your company’s Google My Business page for your business address and phone number</li>
 	<li>Claiming your Google Maps listing</li>
 	<li>Optimizing your Google My Business page for backlinks</li>
 	<li>Optimizing your business hours and services on Google My Business</li>
</ul>
</div>
<div class="local-listing-col">
<h4><span>5</span>TRACKING YOUR LOCAL SEO CAMPAIGN</h4>
<ul>
 	<li>Monitoring your keyword rankings, organic traffic, calls, and leads</li>
 	<li>Monitoring the keywords rankings of your competitors</li>
 	<li>Monitoring your top-three local competitors’</li>
 	<li>And more</li>
</ul>
</div>
<div class="local-listing-col">
<h4><span>6</span>TWEAKING YOUR LOCAL SEO CAMPAIGN</h4>
<ul>
 	<li>Optimizing and pivoting your campaign for better performance over time</li>
</ul>
</div>
</div>
<div class="meet-team"><div id="team-slide" class="single-faq-head"><h3> <span>READ MORE</span><br></h3></div></div>
</div>
</div>
</section>

<section class="seo-case-form-sec">
<div class="content-center">
<div class="top-title">SEO CASE STUDY</div>
<div class="left-col"><img class="alignnone" src="<?php bloginfo( 'template_directory' ); ?>/images/seo-case-study-1.png" alt="" width="390" height="341" /></div>
<div class="seo-form-col gravity-form" style="display: block;">


<div class="form-heading">A Really Great Headline Will Go Here</div>

<?php echo do_shortcode('[gravityform id=73 title=false description=false ajax=true tabindex=49]'); ?>

</div>
</div>	
</section>
<section class="makes-bluecorona">
<div class="content-center">
<h2 style="text-align: center;">What Makes Blue Corona Different</h2>
<p>Our goal is to be the best analytical, data-driven online marketing and SEO company on the planet! Unlike other SEO companies, we operate from the perspective of a business owner (our account managers have gotten to know more about business than most “SEO gurus” will ever know—call us and see).</p>

<p><strong>We strive to provide superior service by offering the following to all our SEO clients:</strong></p>
<div class="superior-service">
<div class="serve-left"><img src="<?php bloginfo( 'template_directory' ); ?>/images/s-services.png" /></div>
<div class="serve-rght">
<ul>
 	<li><strong>A dedicated Account Manager,</strong> someone that understands business and SEO, to be your guide</li>
 	<li><strong>Detailed monthly reports</strong> (you can actually understand) that connect SEO performance to your bottom line</li>
 	<li><strong>A support team</strong> that includes an analyst, web designer/developer, and a dedicated professional copywriter</li>
 	<li><strong>Access to our proprietary analytics software</strong>(better data drives better results)</li>
</ul>
<p><strong>Don’t take our word for it! Check out our case studies of actual client results, along with our client testimonials.</strong></p>
</div>
</div>
<div class="meet-team"><div id="team-slide" class="single-faq-head"><h3> <span>READ MORE</span><br></h3></div></div>
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
<div class="content-center seo-tab-sec">
<div id="content-accs" class="wow fadeInDown">
		 
<h2>See the businesses we work with</h2>		 

<div id="demoTab">
   <ul class="resp-tabs-list">
   
            <li class="resp-tab-item "><span>Inbound marketing services</span></li>
			
	        <li class="resp-tab-item"><span>marketing anaylytics</span></li>
	        </ul>
   <div class="resp-tabs-container">
   <div class="resp-tab-content">
   <div class="mCustomScrollbar _mCS_2">
		<div class="include-service-content">
			<h3>Include but are not limited to:</h3>
			<ul>
				<li>Architects and custom builders</li>
				<li>Bathroom remodelers </li>
				<li>Chiropractors </li>
				<li>Contractors </li>
				<li>Dentists </li>
				<li>Electricians </li>
				<li>Enterprise accounts </li>
				<li>Fire protection</li>
				<li>Flooring companies</li>
				<li>Franchises</li>
				<li>HVAC companies</li>
				<li>Kitchen remodelers</li>
				<li>Landscapers</li>
				<li>Lawyers</li>
				<li>Plumbers</li>
				<li>Property management</li>
				<li>Remodelers</li>
				<li>Restoration</li>
				<li>Roofers</li>
				<li>Solar Companies</li>
				<li>Window and door Companies</li>
			</ul>
		</div>
	
</div> 
</div> 

  <div class="resp-tab-content">
  <div class="mCustomScrollbar _mCS_2">
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
</div>  
</div>
</div>
</div>



            

         </div>
</div>
<div class="footer-form-section gravity-form seo-page">
	<div class="content-center">
	<div class="form-center"> 
		<div class="icon"></div>
	   <div class="form-heading"><span class="form-icon"></span> Get Started Today</div>
	   <?php echo do_shortcode('[gravityform id="58" title="false" description="false" tabindex="234"]'); ?>
	</div>
	</div>
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
 
		</div>
	</div>
</div>

	

<?php get_footer();?>