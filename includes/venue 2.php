<section id="venue" class="section">
  <div class="container">
    <div class="section-header">
      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Venue</h1>
    </div>
    <div class="clearfix flex-center-aligned">
      <div class="venue-description wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >
        <h2><?php the_field('address_line_1'); ?></h2>
        <h3><?php the_field('address_line_2'); ?></h3>
        
        <p><?php the_field('additional_information'); ?></p>
        
        <a class="more-btn find-us" href="<?php the_field('map_link'); ?>" target="_blank">
          <span>Find Us</span>
          <span class="btn-circle">→</span>
        </a>
        
      </div>
      <div class="venue-img wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" data-wow-delay="300ms">
        <img width="500" height="500" src="<?php the_field('venue_img'); ?>" alt="Evangelische Schule Berlin Zentrum" />
      </div>
    </div>
  </div>
</section>