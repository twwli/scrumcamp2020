<?php
/*
 Template Name: BuddyPress */
?>

<?php get_header(); ?>

<main class="page-content">
	<div class="container clearfix">
    <h1><?php the_title(); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; else : ?>
			<article id="post-not-found" class="hentry clearfix" style="text-align: center;">
			   	<h1><?php _e( 'Oops, nothing found!', 'acbtheme' ); ?></h1>
			</article>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
