<?php
/*
 Template Name: Proposed Sessions */
?>

<?php get_header(); ?>

<main class="page-content">
	<section id="proposed-sessions" class="section bg-purple">
	  <div class="container">
	    <div class="section-header">
	      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Proposed Sessions</h1>
	    </div>
	    <div class="clearfix">
	      <ul class="tab-group clearfix">
	        <li class="tab active"><a href="#day-one">Fri. 26th</a></li>
	        <li class="tab"><a href="#day-two">Sat. 27th</a></li>
	      </ul>
	      
	      <div class="tab-content">      
	        <div id="day-one" class="day day-one wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10">
	          <div class="day-header">
	            <h2>Talks</h2>
	            <h3>Friday April 26th</h3>
	          </div>
	            <?php 
	            
	            // get posts
	            $posts = get_posts(array(
	            	'post_type'			=> 'friday',
	            	'posts_per_page'	=> 6,
	            	'meta_key'			=> 'start_time',
	            	'orderby'			=> 'meta_value',
	            	'order'				=> 'ASC'
	            ));
	            
	            if( $posts ): ?>
	            
	            <ul>
	            
	            <?php foreach( $posts as $post ): 
	            		
	            		setup_postdata( $post )
	            		
	            		?>
	            
	            <li class="clearfix"><span class="event"><?php the_title(); ?></span> <span class="time"><?php the_field('start_time'); ?><?php $value = get_field( "end_time" );
	              if( $value ) {
	                  echo '-' . $value . '';
	              } else {
	                  echo '';
	            } ?></span></li>
	          <?php endforeach; ?>
	          </ul>
	          
	          <?php wp_reset_postdata(); ?>
	          
	          <?php endif; ?>
	        </div>
	        
	        <div id="day-two" class="day day-two wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" data-wow-delay="300ms">
	          <div class="day-header">
	            <h2>Talks</h2>
	            <h3>Saturday April 27th</h3>
	          </div>
	          <?php 
	            
	            // get posts
	            $posts = get_posts(array(
	            	'post_type'			=> 'saturday',
	            	'posts_per_page'	=> 6,
	            	'meta_key'			=> 'start_time',
	            	'orderby'			=> 'meta_value',
	            	'order'				=> 'ASC'
	            ));
	            
	            if( $posts ): ?>
	            
	            <ul>
	            
	            <?php foreach( $posts as $post ): 
	            		
	            		setup_postdata( $post )
	            		
	            		?>
	            
	            <li class="clearfix"><span class="event"><?php the_title(); ?></span> <span class="time"><?php the_field('start_time'); ?><?php $value = get_field( "end_time" );
	              if( $value ) {
	                  echo '-' . $value . '';
	              } else {
	                  echo '';
	            } ?></span></li>
	          <?php endforeach; ?>
	          </ul>
	          
	          <?php wp_reset_postdata(); ?>
	          
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
</main>

<?php get_footer(); ?>
