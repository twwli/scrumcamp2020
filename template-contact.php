<?php
/*
 Template Name: Contact */
?>

<?php get_header(); ?>

<main class="page-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container text-wrapper" style="display: flex; flex-direction: column; justify-content: center; text-align: center;">
      <div>
        <?php the_content(); ?>
      </div>
    </div>
		<?php endwhile; else : ?>
			<article id="post-not-found" class="hentry flex" style="text-align: center;">
			   	<h1><?php _e( 'Oops, nothing found!', 'acbtheme' ); ?></h1>
			</article>
		<?php endif; ?>
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
