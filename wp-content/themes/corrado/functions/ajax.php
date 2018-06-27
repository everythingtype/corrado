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
  $posttype = $_POST['posttype'];

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

  if( ! $posts->have_posts() ) :
    // get_template_part( 'content', 'none' );
    // error!
  else :
    while ( $posts->have_posts() ) :
      $posts->the_post();
      // get_template_part( 'content', get_post_format() );
      echo get_the_title();
    endwhile;
  endif;

  die();

}

?>
