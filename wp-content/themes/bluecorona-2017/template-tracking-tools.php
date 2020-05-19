<?php

/**

 * Template Name: Tracking Tools Template

 */



get_header(); ?>

<div id="sub-container" >

   <div class="sub-title-container">

      <?php if( get_field('header_image') ){ ?>	

  

   <img src=" <?php the_field('header_image'); ?>" alt=""/>

   <?php }else{ ?>	

  <img src="<?php bloginfo( 'template_directory' ); ?>/images/about-subpage-header-image.jpg" alt="about"/>

   <?php } ?>

     

   </div>

   <div class="breadcrumb-container">

      <?php include('breadcrumb-section.php')?>

   </div>

   <div class="sub-inner">

      <div class="free-stuff-icon wow bounceInDown">

         <div class="arrow-link-in free-stuff-icon-inner">

            <a href="#free-stuff">

               <div class="down-arrow">

                  <span class="left"></span>

                  <span class="center"></span>

                  <span class="right"></span>

               </div>

            </a>

         </div>

      </div>

      <div class="content-center">

         <div class="columns-1" id="content-columns">

            <div class="sub-inner-content">

              <h1><?php the_title(); ?></h1>
				<form action="" method="post" class="tracking-form" >
				<div class="tracking_fields">
					<div class="tracking_field">
					<label>Tool Name</label>
					<input value="" tabindex="7" type="text">				
					</div>
					<div class="tracking_field">
					<select>
					  <option value="B2B Platform">B2B Platform</option>
					  <option value="Website Analytics">Website Analytics</option>
					  <option value="Website Analytics">Website Analytics</option>
					  <option value="Retargeting Platform">Retargeting Platform</option>
					  <option value="Marketing Automation">Marketing Automation</option>
					</select>					
					</div>
					<div class="tracking_field">
					<select>
					  <option value="B2B Platform">Paid</option>
					  <option value="PaidB25">PaidB25</option>
					  <option value="Free">Free</option>
					  <option value="Freemium">Freemium</option>
					</select>
					</div>
					<div class="tracking_field">
					<select>
					  <option value="7 Days">7 Days</option>
					  <option value="14 Days">14 Days</option>
					  <option value="30 Days">30 Days</option>
					  <option value="Other">Other</option>
					</select>
					</div>
				</div>	 
				<div class="tracking_footer"><button class="tracking_button" value="Search" tabindex="24"  type="submit">Search Tool</button></div>		 		
				</form>
               <div class="tracking_description_area">
               <div class="tracking_description">
			   <h2>Lead Forensics</h2>
			   <p>Lead Forensics helps rebuild sales funnels by identifying leads in real time, focusing on the best leads, and maximizing sales and marketing ROI</p>
			   <p><strong>Domain :</strong> http://www.doubleverify.com/ <br>
			   <strong>Fess :</strong> Paid<br>
			   <strong>Monthly Price :</strong> Unknown<br>
			  <strong>Trial :</strong> 7 Days</p>
			   </div>
			   </div>

  

               </div>

               

               <?php the_field('sub_content'); ?>
			   <?php include('get-in-touch.php')?>

            </div>

         </div>

      </div>

   </div>

   <!-- S:Free Stuff -->

   <?php// include('free-stuff.php')?>

   <!-- E:Free Stuff -->
   <div class="analysis-sec">
		<div class="content-center">
			<div class="large-title">GET A FREE ANALYSIS</div>
			<div class="mediam-title">Enter  your website url below:</div>
			<div class="gravity-form-website">
			<?php echo do_shortcode('[gravityform id="63" title="false" description="false" ajax="true" tabindex="62"]'); ?>
		</div>
		</div>
</div>

</div>

<?php get_footer(); ?>