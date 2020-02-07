<?php get_header(); ?>


<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

		<header class="single-speaker-header bg-purple">
      <div class="wrapper flex">
        <div class="speaker-profile-img-wrapper">
          <div class="speaker-profile-img">
            <img class="grayscale" width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
          </div>
        </div>
        <div class="speaker-details flex flex-column">
          <div>
            <h1 class="speaker-name underlined"><?php the_title(); ?></h1>
            <br /><span class="speaker-role"><?php the_field('your_job'); ?></span><span class="separator"> . </span> 
            <span><?php the_field('your_city'); ?>, <?php the_field('your_country'); ?></span>
          </div>
          <div class="speaker-links">
            <span>You might know me from</span><br />
            
            <?php $value = get_field( "your_website" );
              if( $value ) { ?>
                  <a class="website-link" href="https://<?php the_field('your_website'); ?>" target="_blank">
                    <?php the_field('your_website'); ?>
                  </a>
            <?php } else {} ?>
            
            <?php $value = get_field( "your_twitter" );
              if( $value ) { ?>
                  <a href="<?php the_field('your_twitter'); ?>" target="_blank">
                    <img width="14px" height="14px" src="<?php echo get_template_directory_uri(); ?>/library/images/ico-twitter.svg" alt="" />
                  </a>
            <?php } else {} ?>
            
            <?php $value = get_field( "your_facebook" );
              if( $value ) { ?>
                  <a href="<?php the_field('your_facebook'); ?>" target="_blank">
                    <img width="14px" height="14px" src="<?php echo get_template_directory_uri(); ?>/library/images/ico-facebook.svg" alt="" />
                  </a>
            <?php } else {} ?>
            
            <?php $value = get_field( "your_instagram" );
              if( $value ) { ?>
                  <a href="<?php the_field('your_instagram'); ?>" target="_blank">
                    <img width="14px" height="14px" src="<?php echo get_template_directory_uri(); ?>/library/images/ico-instagram.svg" alt="" />
                  </a>
            <?php } else {} ?>
            
            <?php $value = get_field( "your_linkedin" );
              if( $value ) { ?>
                  <a href="<?php the_field('your_linkedin'); ?>" target="_blank">
                    <img width="14px" height="14px" src="<?php echo get_template_directory_uri(); ?>/library/images/ico-linkedin.svg" />
                  </a>
            <?php } else {} ?>
            
            <?php $value = get_field( "your_xing" );
              if( $value ) { ?>
                  <a href="<?php the_field('your_xing'); ?>" target="_blank">
                    <img width="14px" height="14px" src="<?php echo get_template_directory_uri(); ?>/library/images/ico-xing.svg" />
                  </a>
            <?php } else {} ?>
            
            <?php $value = get_field( "your_youtube" );
              if( $value ) { ?>
                  <a href="<?php the_field('your_youtube'); ?>" target="_blank">
                    <img width="14px" height="14px" src="<?php echo get_template_directory_uri(); ?>/library/images/ico-youtube.svg" />
                  </a>
            <?php } else {} ?>
          </div>
        </div>
        
      </div>
    </header>

		<section class="entry-content flex wrapper">
      <div class="single-speaker-content">
			  <?php $value = get_field( "about" );
			    if( $value ) { ?>
			        <?php the_field('about'); ?>
			  <?php } else {} ?>
			</div>
		</section> <!-- end article section -->
	</article>

	<?php endwhile; ?>

	<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'acbtheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'acbtheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'acbtheme' ); ?></p>
				</footer>
			</article>

	<?php endif; ?>

  <?php
  	$next_post = get_next_post();
  	if (!empty( $next_post )): ?>
    <div class="go-back-home-section">
      <div class="container">
        <a class="more-btn find-us" href="<?php echo get_permalink( $next_post->ID ); ?>">
          <span>Next Speaker</span>
          <span class="btn-circle">→</span>
        </a>
      </div>
    </div>
    	<?php else : ?>
    		<!-- No more posts -->
    <?php endif; ?>

</main>

<?php get_footer(); ?>
