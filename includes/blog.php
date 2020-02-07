<section id="blog" class="section">
  <div class="container">
    <div class="section-header">
      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Blog</h1>
    </div>
    
    <div class="latest-posts">
      <?php query_posts('showposts=2&post_type=post'); if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
        <div class="latest-post wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10">
            <!-- <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?> logo" /> -->
            <span class="post-category single-post-category"><?php the_category( ', ' ); ?></span>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <a class="read-more-link transition" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
    <?php else : ?>
    <?php endif; 
    wp_reset_query(); ?>
    <a class="more-btn center-aligned find-us" href="<?php echo home_url(); ?>/blog">
      <span>See all Articles</span>
      <span class="btn-circle">→</span>
    </a>
  </div>
</section>