			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="inner-footer clearfix">
          <p class="source-org copyright">
            <span>&copy;<?php bloginfo( 'name' ); ?></span>
            <span class="separator"> . </span><span>Website by <a href="https://www.theworldwelivein.co.uk/" target="_blank">TWWLI</a></span>
             <span class="separator"> . </span><a href="/imprint">Imprint</a>
             <span class="separator"> . </span><a href="/privacy-policy">Privacy Policy</a>
             <span class="separator"> . </span><a href="/contact">Contact</a>
          </p>
          
          <a class="change-consent" onclick="window.__cmp('displayConsentUi', 2, !0); ">Change Consent</a>
				</div>

			</footer>

		</div>
    <?php include (TEMPLATEPATH . '/includes/mobile-nav.php'); ?>
    <?php include (TEMPLATEPATH . '/includes/cookies-consent.php'); ?>
		<?php // all js scripts are loaded in library/acb.php ?>
		<script>
		  document.addEventListener("DOMContentLoaded", function(e) {
		    document.body.classList.remove('fade');
		  });
		</script>
		<?php wp_footer(); ?>
	</body>

</html> <!-- end of site. what a ride! -->
