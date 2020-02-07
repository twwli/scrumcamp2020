<section id="sponsors" class="section bg-light-blue">
  <div class="container">
    <div class="section-header">
      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Sponsors</h1>
    </div>

    <div id="sponsors-intro" class="col-container clearfix">
      <div class="col one-half middle-aligned">
        <div class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >
        <?php the_field('intro_text_right'); ?>
        </div>
      </div>
    </div>

    <div class="partners">
      <ul>
      <?php query_posts('showposts=-1&post_type=partners'); if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
        <li class="single-partner wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php 
            
            $image = get_field('logo_homepage');
            
            if( !empty($image) ): ?>
            
            	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            
            <?php endif; ?>
          </a>
        </li>
      <?php endwhile; ?>
      </ul>
    </div>
    
    <?php else : ?></article>
    <?php endif; 
    wp_reset_query(); ?>
    <a class="more-btn center-aligned find-us" href="<?php echo home_url(); ?>/sponsors" style="display: none;">
      <span>See all Sponsors</span>
      <span class="btn-circle">→</span>
    </a>
  </div>
</section>