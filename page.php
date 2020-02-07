<?php get_header(); ?>

<main class="page-content">
	<div class="container clearfix">
    <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" ><?php the_title(); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; else : ?>
			<article id="post-not-found" class="hentry clearfix" style="text-align: center;">
			   	<h1><?php _e( 'Oops, nothing found!', 'acbtheme' ); ?></h1>
			</article>
		<?php endif; ?>
	</div>
  <div class="go-back-home-section">
    <div class="container">
      <a class="more-btn find-us" href="<?php echo home_url(); ?>">
        <span>Go Back Home</span>
        <span class="btn-circle">→</span>
      </a>
    </div>
  </div>
</main>
<?php get_footer(); ?>
