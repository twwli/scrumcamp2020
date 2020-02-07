<?php
/*
Author: Olivier Guillard
*/

// LOAD acb CORE (if you remove this, the theme will break)
require_once( 'library/acb.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH acb
Let's get everything up and running.
*********************/

function acb_ahoy() {

  //Allow editor style.
  add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // let's get language support going, if you need it
  load_theme_textdomain( 'acbtheme', get_template_directory() . '/library/translation' );

  // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
  require_once( 'library/custom-post-type.php' );

  // launching operation cleanup
  add_action( 'init', 'acb_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'acb_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'acb_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'acb_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'acb_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'acb_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  acb_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'acb_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'acb_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'acb_excerpt_more' );

} /* end acb ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'acb_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'acb-thumb-600', 600, 150, true );
add_image_size( 'acb-thumb-300', 300, 100, true );
add_image_size( 'square', 300, 300, true );
add_image_size( 'attendee', 400, 533, true );

add_filter( 'image_size_names_choose', 'acb_custom_image_sizes' );

function acb_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'acb-thumb-600' => __('600px by 150px'),
        'acb-thumb-300' => __('300px by 100px'),
        'square' => __('600px by 600px'),
        'attendee' => __('400px by 533px'),
    ) );
}

/************* ALLOW SVG THUMBNAILS *********************/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/

function acb_theme_customizer($wp_customize) {
  // $wp_customize calls go here.
  //
  // Uncomment the below lines to remove the default customize sections 

  // $wp_customize->remove_section('title_tagline');
  // $wp_customize->remove_section('colors');
  // $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
  // $wp_customize->remove_section('nav');

  // Uncomment the below lines to remove the default controls
  // $wp_customize->remove_control('blogdescription');
  
  // Uncomment the following to change the default section titles
  // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
  // $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action( 'customize_register', 'acb_theme_customizer' );

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function acb_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'acbtheme' ),
		'description' => __( 'The first (primary) sidebar.', 'acbtheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'acbtheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'acbtheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function acb_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'acbtheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'acbtheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'acbtheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'acbtheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

/************* REMOVE DEFAULT WP WIDGETS *************/

/************* Stop Storing IP Address in Comments *************/

function wpb_remove_commentsip( $comment_author_ip ) {
return '';
}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );

/************* Disable the emoji's *************/

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/************* REMOVE POSTS FROM ADMIN MENU *************/

function remove_menus(){
    //remove_menu_page( 'index.php' );                  //Dashboard
    //remove_menu_page( 'jetpack' );                    //Jetpack* 
    //remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
}

add_action( 'admin_menu', 'remove_menus' );


/************* REMOVE DEFAULT WP WIDGETS *************/

//remove_action( 'init', 'wp_widgets_init', 1 );
//add_action( 'init', function() { do_action( 'widgets_init' ); }, 1 );

/************* HIDE WP-ADMIN (FRONT-END) *********************/

add_filter('show_admin_bar', '__return_false');


/************* Remove Archive from Archives title *****************/

add_filter( 'get_the_archive_title', 'replaceCategoryName'); 
   function replaceCategoryName ($title) {

   $title =  single_cat_title( '', false );
   return $title; 
}

/************* post Reading Time *****************/

function post_reading_time($post_id, $post, $update)  {

	if(!$update) {
		return;
	}

	if(wp_is_post_revision($post_id)) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) and DOING_AUTOSAVE ) {
		return;
	}

	if ($post->post_type !=  'post') {
    		return;
	}

	$word_count = str_word_count(strip_tags($post->post_content));

	$minutes = ceil($word_count / 300);
	
	update_post_meta( $post_id, 'post_time', $minutes );
}

add_action('save_post', 'post_reading_time', 10, 3);

/************* HTML5 PREFETCH *****************/

add_action('wp_head', 'gkp_prefetch');
function gkp_prefetch() {
	
    if ( is_single() ) {  ?>
		
	<!-- Préchargement de la page d\'accueil -->
	<link rel="prefetch" href="<?php echo home_url(); ?>" />
	<link rel="prerender" href="<?php echo home_url(); ?>" />
		
	<!-- Préchargement de l\'article suivant -->
	<link rel="prefetch" href="<?php echo get_permalink( get_adjacent_post(false,'',true) ); ?>" />
	<link rel="prerender" href="<?php echo get_permalink( get_adjacent_post(false,'',true) ); ?>" />
   <?php
   }
}

/************* Defer Javascripts *****************/

// Defer jQuery Parsing using the HTML5 defer property
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

/************* Custom Columns for ACF *****************/

function sk_acf_update_user_postdata( $value, $post_id, $field ) {
	global $_POST;
	
	$your_name_fields = get_field('your_name', $post_id)[0];
  
	$head_brand = $your_name_fields['head_brand'];
	$head_name = $your_name_fields['head_name'];
  
	$user_title = $value;
	$user_slug = sanitize_title( $user_title );
  
  $user_postdata = array(
    'ID'          => $post_id,
    'post_title'  => $user_title,
	  'post_name'   => $user_slug
  );
  
  wp_update_post( $user_postdata );
	
	return $value;
}

add_filter('acf/update_value/key=field_5c409afa011c0', 'sk_acf_update_user_postdata', 10, 3);

/* Display session proposal instead of Title*/

function sk_acf_update_session_postdata( $value, $post_id, $field ) {
	global $_POST;
	
	$your_name_fields = get_field('title', $post_id)[0];
  
	$head_brand = $your_name_fields['head_brand'];
	$head_name = $your_name_fields['head_name'];
  
	$session_title = $value;
	$session_slug = sanitize_title( $session_title );
  
  $session_postdata = array(
    'ID'          => $post_id,
    'post_title'  => $session_title,
	  'post_name'   => $session_slug
  );
  
  wp_update_post( $session_postdata );
	
	return $value;
}

add_filter('acf/update_value/key=field_5c41a7abc2092', 'sk_acf_update_session_postdata', 10, 3);

/************* WP CACHE FLUSH *****************/

wp_cache_flush()


/* DON'T DELETE THIS CLOSING TAG */ ?>
