<?php get_header(); ?>


<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

		<header class="single-speaker-header bg-purple">
      <div class="wrapper flex">
        <div class="speaker-profile-img-wrapper">
          <div class="speaker-profile-img">
            <img class="" width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
          </div>
        </div>
        <div class="speaker-details flex flex-column">
          <div>
            <span class="medal <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.077 7.93" fill-rule="evenodd" clip-rule="evenodd" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"><defs><style>.fil0{fill:#fff;fill-rule:nonzero}</style></defs><path class="fil0" d="M4.254 4.044c-.559.322-1.297.227-1.738-.238a1.431 1.431 0 0 1 1.592-2.312c.17.064.092.316-.103.232a1.176 1.176 0 1 0 .613.613c-.084-.195.168-.272.233-.103.289.664.033 1.444-.597 1.808z"/><path class="fil0" d="M5.727 3.615L7 4.89c.142.142.078.316-.113.36l-.733.172-.171.732c-.044.192-.218.256-.36.114L4.348 4.993l-.484.483a.465.465 0 0 1-.653 0l-.483-.483-1.274 1.274c-.142.142-.316.077-.36-.114l-.172-.732-.732-.171c-.192-.045-.256-.219-.114-.361l1.274-1.274-.483-.483a.464.464 0 0 1 0-.653l.551-.552v-.78c0-.254.208-.461.462-.461h.78l.55-.552a.465.465 0 0 1 .654 0l.552.552h.78c.254 0 .461.207.461.462v.78l.552.55a.464.464 0 0 1 0 .654l-.483.483zm-1.088 1.31l1.111 1.11.193-.825.826-.193-1.11-1.11v.556a.463.463 0 0 1-.463.462H4.64zM1.42 3.906l-1.11 1.11.825.194.193.826 1.11-1.111h-.556a.463.463 0 0 1-.462-.462v-.557zM1.881.94a.209.209 0 0 0-.208.208v.885l-.626.625a.21.21 0 0 0 0 .295l.626.625v.885c0 .114.094.208.208.208h.885l.625.626c.08.08.215.08.295 0l.625-.626h.885a.209.209 0 0 0 .208-.208v-.885l.626-.625a.21.21 0 0 0 0-.295l-.626-.625v-.885A.209.209 0 0 0 5.196.94h-.885L3.686.314a.21.21 0 0 0-.295 0L2.766.94H1.88z"/></svg>
            <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?></span><br />
            <h1 class="speaker-name underlined"><?php the_title(); ?></h1>
           </div>
        </div>
        
      </div>
    </header>

		<section class="entry-content flex wrapper ">
      <div class="single-speaker-content container post-content">
			  <?php the_content(); ?>
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
          <span>Next Sponsor</span>
          <span class="btn-circle">→</span>
        </a>
      </div>
    </div>
    	<?php else : ?>
    		<!-- No more posts -->
    <?php endif; ?>

</main>

<?php get_footer(); ?>
