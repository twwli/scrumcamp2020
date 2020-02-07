<?php get_header(); ?>
							
<header class="blog-header bg-purple">
  <div class="container">
    <?php
    the_archive_title( '<h1 class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10">', '</h1>' );
    the_archive_description( '<h1 class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10">', '</div>' );
    ?>
  </div>
</header>

<main>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" role="article">
    <div class="container">

			<header class="article-header">
        <img class="grayscale" width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
      </header>
      <div class="article-details">
				<div>
          <span class="post-category"><?php the_category( ', ' ); ?></span>
          <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  				<!-- <p class="byline entry-meta vcard">
          <?php printf( __( 'Posted', 'acbtheme' ).' %1$s %2$s',
         	/* the time the post was published */
         '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
           /* the author of the post */
           '<span class="by">'.__( 'by', 'acbtheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
          	); ?>
  				</p> -->
          <?php the_excerpt(); ?>
        </div>
        <div>
         <a class="read-more-link transition" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>        </div>
			</div>
    </div>
	</article>

	<?php endwhile; ?>

	<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<h1><?php _e( 'Oops, Post Not Found!', 'acbtheme' ); ?></h1>
			</article>

	<?php endif; ?>
</main>

<?php get_footer(); ?>