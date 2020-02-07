<?php
/*
 Template Name: Sponsors */
?>

<?php get_header(); ?>

<header class="blog-header bg-purple">
  <div class="container">
    <h1 class="wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10">Sponsors</h1>
  </div>
</header>

<main>
    
    <!-- Golden Sponsors -->
    
    <?php
      $args = array(
        'post_type'			=> 'partners',
        'showposts'=> -1,
        'order'				=> 'ASC',
        'tax_query' => array(
        		array(
        			'taxonomy' => 'sponsorcategory',
        			'field'    => 'slug',
        			'terms'    => 'golden-sponsor'
        		),
        	),
    );
    
    $wp_query= null;
    $wp_query = new WP_Query();
    $wp_query->query($args);
    ?>
    

    
    <?php if ( $wp_query->have_posts() ) : ?>
    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post();  ?>  	

  	<article id="post-<?php the_ID(); ?>" class="wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" role="article">
      <div class="container">
  
  			<header class="article-header">
          <img class="grayscale" width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
        </header>
        <div class="article-details">
  				<div>
            <span class="post-category"><?php the_category( ', ' ); ?></span>
            <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  
            <?php the_excerpt(); ?>
          </div>
          <div>
            <a class="read-more-link transition" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>
          </div>
  			</div>
      </div>
  	</article>
    
    <?php endwhile; ?>  
    <?php endif; ?> 

  <?php wp_reset_postdata(); ?>
  
  <!-- Silver Sponsors -->
  
  <?php
        $args = array(
          'post_type'			=> 'partners',
          'showposts'=> -1,
          'order'				=> 'ASC',
          'tax_query' => array(
          		array(
          			'taxonomy' => 'sponsorcategory',
          			'field'    => 'slug',
          			'terms'    => 'silver-sponsor'
          		),
          	),
      );
      
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query($args);
      ?>
      
  
      
      <?php if ( $wp_query->have_posts() ) : ?>
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post();  ?>  	
  
    	<article id="post-<?php the_ID(); ?>" class="wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" role="article">
        <div class="container">
    
    			<header class="article-header">
            <img class="grayscale" width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
          </header>
          <div class="article-details">
    				<div>
              <span class="post-category"><?php the_category( ', ' ); ?></span>
              <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
              <?php the_excerpt(); ?>
            </div>
            <div>
              <a class="read-more-link transition" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>
            </div>
    			</div>
        </div>
    	</article>
      
      <?php endwhile; ?>  
      <?php endif; ?> 
  
    <?php wp_reset_postdata(); ?>
  
    <!-- Sponsors -->
  
  <?php
        $args = array(
          'post_type'			=> 'partners',
          'showposts'=> -1,
          'order'				=> 'ASC',
          'tax_query' => array(
          		array(
          			'taxonomy' => 'sponsorcategory',
          			'field'    => 'slug',
          			'terms'    => 'sponsor'
          		),
          	),
      );
      
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query($args);
      ?>
      
  
      
      <?php if ( $wp_query->have_posts() ) : ?>
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post();  ?>  	
  
    	<article id="post-<?php the_ID(); ?>" class="wow fadeInUpSmall" data-wow-duration="600ms" data-wow-offset="10" role="article">
        <div class="container">
    
    			<header class="article-header">
            <img class="grayscale" width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
          </header>
          <div class="article-details">
    				<div>
              <span class="post-category"><?php the_category( ', ' ); ?></span>
              <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
              <?php the_excerpt(); ?>
            </div>
            <div>
              <a class="read-more-link transition" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>
            </div>
    			</div>
        </div>
    	</article>
      
      <?php endwhile; ?>  
      <?php endif; ?> 
  
    <?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
