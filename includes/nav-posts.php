<div class="nav-section clearfix">
  <div class="container">
    
    <div id="NextPrevPosts">
    <?php
    	$prev_post = get_previous_post();
    	if (!empty( $prev_post )): ?>
            
      <a id="prev" class="prev more-btn find-us" href="<?php echo get_permalink( $prev_post->ID ); ?>">
        <div>
          <span class="btn-circle reversed">←</span>
        </div>
        <div>
          <span class="prev-next">Previous</span><span class="double-dots">:</span> <span class="prev-next-title"><?php echo $prev_post->post_title; ?></span>
        </div>
      </a>
      
    <?php else : ?>
    		<!-- No more posts -->
    <?php endif; ?>
    
    <?php
    	$next_post = get_next_post();
    	if (!empty( $next_post )): ?>

      <a id="next" class="prev more-btn find-us" href="<?php echo get_permalink( $next_post->ID ); ?>">
        <div>
          <span class="prev-next">Next</span><span class="double-dots">:</span>
          <span class="prev-next-title"><?php echo $next_post->post_title; ?></span>
        </div>
        <div>
          <span class="btn-circle">→</span>
        </div>
      </a>
      	<?php else : ?>
      		<!-- No more posts -->
      <?php endif; ?>
    </div>
    
  </div>
</div>