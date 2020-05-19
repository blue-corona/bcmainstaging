<?php 
   $args = array('post_type' => 'extraoptions', 'posts_per_page' => 1, 'order' => 'ASC','post__in' => array(6198));
      $query = new WP_Query( $args );
      if($query->have_posts()):
   while($query->have_posts()): $query->the_post();
   ?>
   
   <li><a href="<?php the_field('facebook_link'); ?>" target="_blank"><span class="white-txt fa fa-facebook"></span></a></li>
            <li><a href="<?php the_field('twitter_link'); ?>" target="_blank"><span class="white-txt fa fa-twitter"></span></a></li>
            <li><a href="<?php the_field('linkedin_link'); ?>" target="_blank"><span class="white-txt fa fa-linkedin"></span></a></li>
            <li><a href="<?php the_field('instagram_link'); ?>" target="_blank"><span class="white-txt fa fa-instagram"></span></a></li>
            <li><a href="<?php the_field('youtube'); ?>" target="_blank"><span class="white-txt fa fa-youtube-play"></span></a></li>
			
   
   <?php	endwhile; 
   endif;
   wp_reset_postdata();
   ?>