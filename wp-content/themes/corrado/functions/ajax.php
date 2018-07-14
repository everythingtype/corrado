<?php

/* AJAX Lightboxes */
/* https://premium.wpmudev.org/blog/load-posts-ajax/ */

function enqueue_ajax_scripts() {

	$version = "b";

	if(!wp_script_is('jquery')) wp_enqueue_script("jquery");

	$ajaxjs = get_template_directory_uri() . '/js/lightboxes.js';
	wp_register_script('ajaxjs',$ajaxjs, false, $version);
	wp_enqueue_script( 'ajaxjs',array('jquery'), true);

	wp_localize_script( 'ajaxjs', 'ajaxloading', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' )
	));

}

add_action('wp_enqueue_scripts', 'enqueue_ajax_scripts');


/*
	Hooks that take on the wp_ajax_[action_name] format are only executed for logged in users.
	Hooks that take on the wp_ajax_norpiv_[action_name] format are only executed for non-logged in users.
	The "action_name" refers to the action defined in the AJAX call in our Javascript. They must match.
*/

add_action( 'wp_ajax_nopriv_ajax_action', 'populate_ajax' );
add_action( 'wp_ajax_ajax_action', 'populate_ajax' );

function populate_ajax() {

  $postid = $_POST['postid'];

	$posttype = get_post_type($postid);

  if ( $posttype == 'page' ) :
    $args = array(
      'page_id' => $postid,
    );
  else:
    $args = array(
      'p' => $postid,
    );
  endif;

  $posts = new WP_Query( $args );
  $GLOBALS['wp_query'] = $posts;

  if( $posts->have_posts() ) :
    while ( $posts->have_posts() ) :
      $posts->the_post();

				$templateslug = get_page_template_slug();

				if ( $templateslug == 'page-form.php' ) get_template_part('parts/layout-form');
				if ( $templateslug == 'page-advisor.php' ) get_template_part('parts/layout-advisor');

    endwhile;
  endif;

  die();

}

?>
