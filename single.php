<?php get_header(); ?>

<header id="blog-header" >
  <div class="blog-header bg-purple">
    <div class="container" class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10">
      <h1 ><?php the_title(); ?></h1>
      <div class="single-post-meta">
        <span class="post-category single-post-category"><?php the_category( ', ' ); ?></span>
        <div class="post-meta"><?php the_author_posts_link(); ?>, <?php the_time( get_option( 'date_format' ) ); ?> <span class="separator">|</span> <span class="reading-time"><svg id="Calque_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path class="st1" d="M45 90c24.8 0 45-20.2 45-45S69.8 0 45 0 0 20.2 0 45s20.2 45 45 45zm0-80c19.3 0 35 15.7 35 35S64.3 80 45 80 10 64.3 10 45s15.7-35 35-35z"/><path class="st1" d="M62.7 55.6L50 42.9V20H40v27.1l15.6 15.6z"/></svg> <?php echo get_post_meta($post->ID, 'post_time', true); ?> min read</span></div>
      </div>
    </div>
  </div>
</header>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" role="article" style="position: relative;">
      <?php include (TEMPLATEPATH . '/includes/post-share.php'); ?>	
      <div class="container post-content">
        <?php the_content(); ?>
      </div>
      <div class="container"><?php the_tags( '<ul class="tags"><li class="tag-title">tags</li><li>', '</li><li>', '</li></ul>' ); ?>
      </div>
      <?php include (TEMPLATEPATH . '/includes/inline-post-share.php'); ?>
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
  					<p><?php _e( 'This is the error message in the single.php template.', 'acbtheme' ); ?></p>
  			</footer>
  	</article>
  
  <?php endif; ?>
  
</main>

<?php include (TEMPLATEPATH . '/includes/nav-posts.php'); ?>	

<?php get_footer(); ?>
