<?php get_header(); ?>


<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

		<header class="single-speaker-header bg-dark">
      <div class="wrapper flex">
        
        <div class="speaker-details flex flex-column">
          <div>
            <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
            ?><span> - <?php the_field('category'); ?></span><br />
            <h1 class="speaker-name underlined"><?php the_field('title'); ?></h1>
            <br /><?php $value = get_field( "attendee_url" );
              if( $value ) { ?>
                  <span class="speaker-role">
                    <a href="<?php the_field('attendee_url'); ?>">by <?php the_field('proposed_by'); ?></a>
                  </span>
            <?php } else { ?>
            <span class="speaker-role">by <?php the_field('proposed_by'); ?></span>
            <?php } ?>            
          </div>
          <div class="speaker-links">
            <span>Duration: <?php the_field('duration'); ?></span><br />
            <span>Experience: <?php the_field('experience'); ?></span>
          </div>
        </div>
        
      </div>
    </header>

		<section class="entry-content flex wrapper">
      <div class="single-speaker-content">
			  <?php $value = get_field( "abstract" );
			    if( $value ) { ?>
			        <?php the_field('abstract'); ?>
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
