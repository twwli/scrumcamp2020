<section id="intro" class="section">
  <div class="container">
    <div class="section-header">
      <h1 class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >
        <span class="underlined"><?php the_field('intro_title_1'); ?></span> <br />
        <span class="underlined"><?php the_field('intro_title_2'); ?></span></h1>
    </div>
    
    <div class="col-container clearfix">
      <div class="col two-third">
        <p class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" ><?php the_field('intro_left_column'); ?></p>
      </div>
      
      <!-- <div class="col one-half">
        <p class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10"  data-wow-delay="300ms"><?php the_field('intro_right_column'); ?></p>
      </div> -->
    </div>
  </div>
</section>