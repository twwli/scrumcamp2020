<section id="proposed-sessions" class="section bg-dark" style="background: rgba(60,115,100,.9);">
  <div class="container">
    <div class="section-header">
      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Proposed Sessions</h1>
    </div>
    
    <div id="sponsors-intro" class="col-container clearfix">
      <div class="col one-half middle-aligned">
        <div class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" ><?php the_field('intro_text_proposed_sessions'); ?></div>
      </div>
    </div>

    <div class="clearfix">
      <!-- <ul class="tab-group clearfix">
        <li class="tab active"><a href="#day-one">Fri. 17th</a></li>
        <li class="tab"><a href="#day-two">Sat. 18th</a></li>
      </ul> -->
      
      <div class="tab-content">      
        <div id="day-one" class="day day-one wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10">
            <?php
              $args = array(
                'post_type'			=> 'proposedsessions',
                'showposts'=> -1,
                'meta_key'			=> 'start_time',
                'orderby'			=> 'meta_value',
                'order'				=> 'ASC',
                /* 'tax_query' => array(
                		array(
                			'taxonomy' => 'day',
                			'field'    => 'slug',
                			'terms'    => 'friday-april-17th'
                		),
                	), */
            );
            
            $wp_query= null;
            $wp_query = new WP_Query();
            $wp_query->query($args);
            ?>
            
            <ul>
            
            <?php if ( $wp_query->have_posts() ) : ?>
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post();  ?>  	
  
              <li class="clearfix session <?php the_field('category'); ?>">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <div class="line-one">
                    <span class="time"><?php the_field('start_time'); ?><?php $value = get_field( "end_time" );
                    if( $value ) {
                        echo '-' . $value . '';
                    } else {
                        echo '';
                    } ?></span>
                    <span class="event"><?php the_field('category'); ?></span>
                  </div>
                  <div class="line-two clearfix">
                    <span><?php the_field('title'); ?></span> by <span><?php the_field('proposed_by'); ?></span>
                  </div>
                </a>
              </li>
            
            <?php endwhile; ?>  
            <?php endif; ?> 
            </ul>
          
          <?php wp_reset_postdata(); ?>
          

        </div>
        
        <!-- <div id="day-two" class="day day-two wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" data-wow-delay="300ms">
          <div class="day-header">
            <h3>Saturday April 18th</h3>
          </div>
          
          <?php
          $args = array(
              'post_type'			=> 'proposedsessions',
              'showposts'=> -1,
              'meta_key'			=> 'start_time',
              'orderby'			=> 'meta_value',
              'order'				=> 'ASC',
              'tax_query' => array(
              		array(
              			'taxonomy' => 'day',
              			'field'    => 'slug',
              			'terms'    => 'saturday-april-18th'
              		),
              	),
          );
          
          $wp_query= null;
          $wp_query = new WP_Query();
          $wp_query->query($args);
          ?>
          
          <ul>
          
          <?php if ( $wp_query->have_posts() ) : ?>
          <?php while ( $wp_query->have_posts() ) : $wp_query->the_post();  ?>  	

            <li class="clearfix session <?php the_field('category'); ?>">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <div class="line-one">
                  <span class="time"><?php the_field('start_time'); ?><?php $value = get_field( "end_time" );
                  if( $value ) {
                      echo '-' . $value . '';
                  } else {
                      echo '';
                  } ?></span>
                  <span class="event"><?php the_field('category'); ?></span>
                </div>
                <div class="line-two clearfix">
                  <span><?php the_field('title'); ?></span> by <span><?php the_field('proposed_by'); ?></span>
                </div>
              </a>
            </li>
          
          <?php endwhile; ?>  
          <?php endif; ?> 
          </ul>
        </div> -->
      </div>
    </div>
  </div>
</section>