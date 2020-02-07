<?php get_header(); ?>

<section id="attendees" class="section bg-light-blue">
  <div class="container">
    <div class="section-header">
      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Organizer Team</h1>
    </div>
    
    <div class="speakers clearfix">
      <ul class="slick flex-wrap">
        <?php query_posts('showposts=-1&post_type=team'); if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
          <li>
            <a class="single-speaker wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <div class="speaker-profile-img">
                <img class="grayscale" width="400" height="533" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
              </div>
              <div class="speaker-details">
                <h3 class="speaker-name"><?php the_field('your_name'); ?></h3>
                <h4 class="speaker-role"><?php the_field('your_job'); ?></h4>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php else : ?>
      	<article id="post-not-found" class="hentry clearfix" style="text-align: center;">
      	   	<h1><?php _e( 'Oops, No Attendee found!' ); ?></h1>
      	</article>
      <?php endif; 
      wp_reset_query(); ?>	

    </div>
  </div>
</section>
<div class="go-back-home-section">
  <div class="container">
    <a class="more-btn find-us" href="<?php echo home_url(); ?>">
      <span>Go Back Home</span>
      <span class="btn-circle">→</span>
    </a>
  </div>
</div>
<?php get_footer(); ?>
