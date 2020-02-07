<?php
/*
 Template Name: Thanks */
?>

<?php get_header(); ?>

<header id="" role="banner" itemscope itemtype="http://schema.org/WPHeader">
  <div id="navbar" class="clearfix" >
		<div class="inner-header fadeIn" data-wow-duration="600ms" data-wow-delay="1000ms">
      <a id="logo" class="h1" itemscope itemtype="http://schema.org/Organization" href="<?php echo home_url(); ?>" rel="nofollow">ACB <span class="year">2020</span></a>
      <nav role="navigation" class="template-forms-nav"> 
        <div><span><?php the_title(); ?></span> form</div>
        <a href="#">Help</a>
      </nav>
		</div>
  </div>
</header>

<main class="page-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container text-wrapper">
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
