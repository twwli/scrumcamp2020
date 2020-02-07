<?php
/* acb Speaker Type Example
This page walks you through creating 
a Speaker type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/acb/
*/

// Flush rewrite rules for Speaker types
add_action( 'after_switch_theme', 'acb_flush_rewrite_rules' );

// Flush your rewrite rules
function acb_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'speakers', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Speaker
		array( 'labels' => array(
			'name' => __( 'Attendees', 'acbtheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Attendee', 'acbtheme' ), /* This is the individual type */
			'all_items' => __( 'All Attendees', 'acbtheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'acbtheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Attendee', 'acbtheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'acbtheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Attendees', 'acbtheme' ), /* Edit Display Title */
			'new_item' => __( 'New Attendee', 'acbtheme' ), /* New Display Title */
			'view_item' => __( 'View Attendee', 'acbtheme' ), /* View Display Title */
			'search_items' => __( 'Search Attendees', 'acbtheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'acbtheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'acbtheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Attendee type', 'acbtheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-heart', /* the icon for the Speaker type menu */
			'rewrite'	=> array( 'slug' => 'attendees', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'attendees', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('custom-fields', 'revisions', 'thumbnail')
		) /* end of options */
	); /* end of register Speaker */
	
	/* this adds your post categories to your Speaker type */
	//register_taxonomy_for_object_type( 'category', 'speakers' );
	/* this adds your post tags to your Speaker type */
	//register_taxonomy_for_object_type( 'post_tag', 'speakers' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

/************* ORGANIZER TEAM  *****************/
	
add_action( 'init', 'create_team_type' );
function create_team_type() {
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Org Team' ),
        'singular_name' => __( 'Org Team' ),
        'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
        'menu_icon' => 'dashicons-admin-post', /* the icon for the custom post type menu */
        
      ),
      'public' => true,
      'has_archive' => 'organizer-team', /* you can rename the slug here */
      'supports' => array('custom-fields', 'revisions', 'thumbnail')
    )
  );
flush_rewrite_rules();
}

/************* PROPOSED SESSIONS  *****************/
	
add_action( 'init', 'create_proposedsessions_type' );
function create_proposedsessions_type() {
  register_post_type( 'proposedsessions',
    array(
      'labels' => array(
        'name' => __( 'Prop Sessions' ),
        'singular_name' => __( 'Prop Session' ),
        'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
        'menu_icon' => 'dashicons-admin-post', /* the icon for the custom post type menu */
        
      ),
      'public' => true,
      'supports' => array('custom-fields', 'revisions', 'taxonomy')
    )
  );
flush_rewrite_rules();

//register_taxonomy_for_object_type( 'category', 'proposedsessions' );
}

add_action( 'init', 'proposedsessions');

/* register_taxonomy( 'day', 
	array('proposedsessions'), 
	array('hierarchical' => true,    
		'labels' => array(
			'name' => __( 'Day', '' ), 
			'singular_name' => __( 'day', '' ), 
			'search_items' =>  __( 'Search day', '' ), 
			'all_items' => __( 'All day', '' ), 
			'parent_item' => __( 'Parent day', '' ), 
			'parent_item_colon' => __( 'Parent day:', '' ), 
			'edit_item' => __( 'Edit day', '' ), 
			'update_item' => __( 'Update day', '' ), 
			'add_new_item' => __( 'Add New day', '' ), 
			'new_item_name' => __( 'New day', '' ) 
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'day-kategorie' ),
	)
); */


/************* SCHEDULE - FRIDAY  *****************/
	
/* add_action( 'init', 'create_friday_type' );
function create_friday_type() {
  register_post_type( 'friday',
    array(
      'labels' => array(
        'name' => __( 'Schedule FRI' ),
        'singular_name' => __( 'Schedule FRI' ),
        'menu_position' => 4, 
        'menu_icon' => 'dashicons-admin-post', 
        
      ),
      'public' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'revisions')
    )
  );
flush_rewrite_rules();
} */

/************* SCHEDULE - SATURDAY  *****************/
	
/* add_action( 'init', 'create_saturday_type' );
function create_saturday_type() {
  register_post_type( 'saturday',
    array(
      'labels' => array(
        'name' => __( 'Schedule SAT' ),
        'singular_name' => __( 'Schedule SAT' ),
        'menu_position' => 4, 
        'menu_icon' => 'dashicons-admin-post', 
        
      ),
      'public' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'revisions')
    )
  );
flush_rewrite_rules();
} */
	
/************* PARTNERS  *****************/
	
add_action( 'init', 'create_partners_type' );
function create_partners_type() {
  register_post_type( 'partners',
    array(
      'labels' => array(
        'name' => __( 'Sponsors' ),
        'singular_name' => __( 'Sponsor' ),
        'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
        'menu_icon' => 'dashicons-admin-post', /* the icon for the custom post type menu */
      ),
      'rewrite'	=> array( 'slug' => 'sponsors', 'with_front' => false ), /* you can specify its url slug */
      'has_archive' => 'sponsors', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => false,
      'public' => true,
      'supports' => array('title', 'revisions', 'thumbnail', 'editor', 'custom-fields')
    )
  );
flush_rewrite_rules();
}

add_action( 'init', 'sponsorcategories');

register_taxonomy( 'sponsorcategory', 
	array('partners'), /* if you change the name of register_post_type( 'day', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Sponsor Categories', '' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Sponsor Category', '' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Sponsor Category', '' ), /* search title for taxomony */
			'all_items' => __( 'All Sponsor Categories', '' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Sponsor Category', '' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Sponsor Category:', '' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Sponsor Category', '' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Sponsor Category', '' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Sponsor Category', '' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Sponsor Category', '' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'sponsor-category' ),
	)
);


?>