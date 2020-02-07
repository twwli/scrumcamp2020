<section id="newsletter" class="section bg-orange">
  <div class="container">
    <div class="section-header">
      <h1 class="underlined wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" >Newsletter</h1>
    </div>
    
    <div id="sponsors-intro" class="col-container clearfix">
      <div class="col one-half middle-aligned">
        <div class="newsletter-intro wow fadeInUp" data-wow-duration="600ms" data-wow-offset="10" ><?php the_field('intro_text_newsletter'); ?></div>
      </div>
    </div>
    
    <div class=" clearfix">      
          <?php //echo do_shortcode('[convertkit form=5131210]'); ?>
          <?php echo do_shortcode('[contact-form-7 id="703" title="Newsletter Homepage"]'); ?>
          <div class="newsletter-box-optin-wrap optin-wrap-label"> 
          	<input type="checkbox" name="dk-speakout-optin" class="checkbox"/>
          	<div class="checkbox-label"><?php the_field('acceptance_text_newsletter'); ?></div>
          </div>
          

          
    </div>    
  </div>
</section>