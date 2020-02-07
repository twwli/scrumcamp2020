<?php
/*
 Template Name: Landing Page
*/
?>

<?php get_header(); ?>

<div id="fullpage" class="section-wrapper">
  <?php include (TEMPLATEPATH . '/includes/home.php'); ?>	
  <?php include (TEMPLATEPATH . '/includes/intro.php'); ?>	 
  <?php include (TEMPLATEPATH . '/includes/blog.php'); ?>	 
  <?php include (TEMPLATEPATH . '/includes/speakers.php'); ?>
  <?php include (TEMPLATEPATH . '/includes/newsletter.php'); ?>
  <?php include (TEMPLATEPATH . '/includes/sponsors.php'); ?>
  <?php include (TEMPLATEPATH . '/includes/proposedsessions.php'); ?>
  <?php include (TEMPLATEPATH . '/includes/team.php'); ?>
  <?php include (TEMPLATEPATH . '/includes/venue.php'); ?>	
  <?php include (TEMPLATEPATH . '/includes/throwback.php'); ?>
</div>

<?php get_footer(); ?>