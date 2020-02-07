<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
  <script src="//instant.page/1.1.0" type="module" integrity="sha384-EwBObn5QAxP8f09iemwAJljc+sU+eUXeL9vSBw1eNmVarwhKk2F9vBEpaN9rsrtp"></script>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <script>
      document.body.classList.add('fade');
    </script>
		<div id="container">

			<header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div id="navbar" class="clearfix header-dark" >
  				<div class="inner-header fadeIn" data-wow-duration="600ms" data-wow-delay="1000ms">
            <a id="logo" class="h1" itemscope itemtype="http://schema.org/Organization" href="<?php echo home_url(); ?>" rel="nofollow">ACB <span class="year">2020</span></a>
            <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
  						<?php wp_nav_menu(array(
  		         'container' => false,                           // remove nav container
  		         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
  		         'menu' => __( 'The Main Menu', 'acbtheme' ),  // nav name
  		         'menu_class' => 'nav top-nav cf',               // adding custom nav class
  		         'theme_location' => 'main-nav',                 // where it's located in the theme
  		         'before' => '',                                 // before the menu
  		               'after' => '',                                  // after the menu
  		               'link_before' => '',                            // before each link
  		               'link_after' => '',                             // after each link
  		               'depth' => 0,                                   // limit the depth of the nav
  		         'fallback_cb' => ''                             // fallback function (if there is one)
  						)); ?>
              <a class="get-tickets" href="https://2020.agile-camp-berlin.com/register/" target="_blank">Get Tickets</a>
  					</nav>
  				</div>
        </div>
			</header>

      <div id="mobile-nav">
        <a id="mobile-logo" class="h1" itemscope itemtype="http://schema.org/Organization" href="<?php echo home_url(); ?>" rel="nofollow">ACB <span class="year">2020</span></a>
        <a class="get-tickets" href="https://2020.agile-camp-berlin.com/register/" target="_blank">Get Tickets</a>
        <!-- Toggle Nav -->
        <nav class="nav">
          <button class="toggle-menu">
            <span></span>
          </button>
        </nav>
      </div>
