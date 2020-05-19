<?php 
   $args = array('post_type' => 'extraoptions', 'posts_per_page' => 1, 'order' => 'ASC','post__in' => array(219));
      $query = new WP_Query( $args );
      if($query->have_posts()):
   while($query->have_posts()): $query->the_post();
   ?>
<div id="free-stuff">
   <div id="free-stuff-top">
      <div class="content-center">
         <div class="heading lit-blue-txt wow fadeInDown hr-line"><?php the_field('stuff_title'); ?></div>
         <div class="sub-heading wow fadeInDown"><?php the_field('stuff_sub_tittle'); ?></div>
         <div class="sub-heading2 lit-blue-txt wow fadeInDown"><?php the_field('stuff_small_text'); ?></div>
      </div>
   </div>
   <div id="free-stuff-btm">
      <div class="content-center">
         <div id="free-tabs">
            <?php $cnt = 1; ?>
            <ul>
               <?php if(get_field('tabs')): ?>
               <?php while(has_sub_field('tabs')): ?>
               <li >
                  <a href="#tabs-<?php echo $cnt; ?>">
                     <div class="free-tab">
                        <div class="free-tab-icon wow fadeInDown"><img src="<?php the_sub_field('icon'); ?>" alt=""/></div>
                        <div class="free-tab-txt wow fadeInDown">free</div>
                        <div class="free-tab-head wow fadeInDown"><?php the_sub_field('title'); ?></div>
                     </div>
                  </a>
               </li>
			   
               <?php 
                  $cnt++;
                  endwhile; ?>
               <?php endif; ?>
            </ul>
            <?php $cnt = 1; ?>
            <?php if(get_field('tabs')): ?>
            <?php while(has_sub_field('tabs')): ?>
            <div id="tabs-<?php echo $cnt; ?>">
               <?php the_sub_field('form_shortcode'); ?>
			     
            </div>
            <?php 
               $cnt++;
               endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<?php	endwhile;
   endif;
   wp_reset_postdata();
   ?>
   
   