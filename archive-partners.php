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
          <img  width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
        </header>
        <div class="article-details">
  				<div>
            <span class="post-category medal <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.077 7.93" fill-rule="evenodd" clip-rule="evenodd" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"><defs><style>.fil0{fill:#fff;fill-rule:nonzero}</style></defs><path class="fil0" d="M4.254 4.044c-.559.322-1.297.227-1.738-.238a1.431 1.431 0 0 1 1.592-2.312c.17.064.092.316-.103.232a1.176 1.176 0 1 0 .613.613c-.084-.195.168-.272.233-.103.289.664.033 1.444-.597 1.808z"/><path class="fil0" d="M5.727 3.615L7 4.89c.142.142.078.316-.113.36l-.733.172-.171.732c-.044.192-.218.256-.36.114L4.348 4.993l-.484.483a.465.465 0 0 1-.653 0l-.483-.483-1.274 1.274c-.142.142-.316.077-.36-.114l-.172-.732-.732-.171c-.192-.045-.256-.219-.114-.361l1.274-1.274-.483-.483a.464.464 0 0 1 0-.653l.551-.552v-.78c0-.254.208-.461.462-.461h.78l.55-.552a.465.465 0 0 1 .654 0l.552.552h.78c.254 0 .461.207.461.462v.78l.552.55a.464.464 0 0 1 0 .654l-.483.483zm-1.088 1.31l1.111 1.11.193-.825.826-.193-1.11-1.11v.556a.463.463 0 0 1-.463.462H4.64zM1.42 3.906l-1.11 1.11.825.194.193.826 1.11-1.111h-.556a.463.463 0 0 1-.462-.462v-.557zM1.881.94a.209.209 0 0 0-.208.208v.885l-.626.625a.21.21 0 0 0 0 .295l.626.625v.885c0 .114.094.208.208.208h.885l.625.626c.08.08.215.08.295 0l.625-.626h.885a.209.209 0 0 0 .208-.208v-.885l.626-.625a.21.21 0 0 0 0-.295l-.626-.625v-.885A.209.209 0 0 0 5.196.94h-.885L3.686.314a.21.21 0 0 0-.295 0L2.766.94H1.88z"/></svg>
            <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?></span>
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
            <img  width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
          </header>
          <div class="article-details">
    				<div>
              <span class="post-category medal <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.077 7.93" fill-rule="evenodd" clip-rule="evenodd" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"><defs><style>.fil0{fill:#fff;fill-rule:nonzero}</style></defs><path class="fil0" d="M4.254 4.044c-.559.322-1.297.227-1.738-.238a1.431 1.431 0 0 1 1.592-2.312c.17.064.092.316-.103.232a1.176 1.176 0 1 0 .613.613c-.084-.195.168-.272.233-.103.289.664.033 1.444-.597 1.808z"/><path class="fil0" d="M5.727 3.615L7 4.89c.142.142.078.316-.113.36l-.733.172-.171.732c-.044.192-.218.256-.36.114L4.348 4.993l-.484.483a.465.465 0 0 1-.653 0l-.483-.483-1.274 1.274c-.142.142-.316.077-.36-.114l-.172-.732-.732-.171c-.192-.045-.256-.219-.114-.361l1.274-1.274-.483-.483a.464.464 0 0 1 0-.653l.551-.552v-.78c0-.254.208-.461.462-.461h.78l.55-.552a.465.465 0 0 1 .654 0l.552.552h.78c.254 0 .461.207.461.462v.78l.552.55a.464.464 0 0 1 0 .654l-.483.483zm-1.088 1.31l1.111 1.11.193-.825.826-.193-1.11-1.11v.556a.463.463 0 0 1-.463.462H4.64zM1.42 3.906l-1.11 1.11.825.194.193.826 1.11-1.111h-.556a.463.463 0 0 1-.462-.462v-.557zM1.881.94a.209.209 0 0 0-.208.208v.885l-.626.625a.21.21 0 0 0 0 .295l.626.625v.885c0 .114.094.208.208.208h.885l.625.626c.08.08.215.08.295 0l.625-.626h.885a.209.209 0 0 0 .208-.208v-.885l.626-.625a.21.21 0 0 0 0-.295l-.626-.625v-.885A.209.209 0 0 0 5.196.94h-.885L3.686.314a.21.21 0 0 0-.295 0L2.766.94H1.88z"/></svg>
              <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?></span>
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
            <img  width="300" height="300" src="<?php the_post_thumbnail_url( 'square' ); ?>" alt="<?php the_field('your_name'); ?>" />
          </header>
          <div class="article-details">
    				<div>
              <span class="post-category medal <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.077 7.93" fill-rule="evenodd" clip-rule="evenodd" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"><defs><style>.fil0{fill:#fff;fill-rule:nonzero}</style></defs><path class="fil0" d="M4.254 4.044c-.559.322-1.297.227-1.738-.238a1.431 1.431 0 0 1 1.592-2.312c.17.064.092.316-.103.232a1.176 1.176 0 1 0 .613.613c-.084-.195.168-.272.233-.103.289.664.033 1.444-.597 1.808z"/><path class="fil0" d="M5.727 3.615L7 4.89c.142.142.078.316-.113.36l-.733.172-.171.732c-.044.192-.218.256-.36.114L4.348 4.993l-.484.483a.465.465 0 0 1-.653 0l-.483-.483-1.274 1.274c-.142.142-.316.077-.36-.114l-.172-.732-.732-.171c-.192-.045-.256-.219-.114-.361l1.274-1.274-.483-.483a.464.464 0 0 1 0-.653l.551-.552v-.78c0-.254.208-.461.462-.461h.78l.55-.552a.465.465 0 0 1 .654 0l.552.552h.78c.254 0 .461.207.461.462v.78l.552.55a.464.464 0 0 1 0 .654l-.483.483zm-1.088 1.31l1.111 1.11.193-.825.826-.193-1.11-1.11v.556a.463.463 0 0 1-.463.462H4.64zM1.42 3.906l-1.11 1.11.825.194.193.826 1.11-1.111h-.556a.463.463 0 0 1-.462-.462v-.557zM1.881.94a.209.209 0 0 0-.208.208v.885l-.626.625a.21.21 0 0 0 0 .295l.626.625v.885c0 .114.094.208.208.208h.885l.625.626c.08.08.215.08.295 0l.625-.626h.885a.209.209 0 0 0 .208-.208v-.885l.626-.625a.21.21 0 0 0 0-.295l-.626-.625v-.885A.209.209 0 0 0 5.196.94h-.885L3.686.314a.21.21 0 0 0-.295 0L2.766.94H1.88z"/></svg>
              <?php echo strip_tags(get_the_term_list( $post->ID, 'sponsorcategory', ' ',', ')); ?></span>
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
