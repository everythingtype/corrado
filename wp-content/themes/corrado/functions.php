<?php

require_once( 'functions/ajax.php' );
require_once( 'functions/analytics.php' );
require_once( 'functions/cpt-tips.php' );
require_once( 'functions/enqueue.php' );
require_once( 'functions/forms.php' );
require_once( 'functions/media.php' );
require_once( 'functions/menus.php' );
require_once( 'functions/spellerberg_wpsrcset.php' );


function theme_support_setup() {
   add_theme_support( 'title-tag' );
   add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'theme_support_setup' );


function is_subpage_of($slug) {

	global $post;

	if ( is_page() || is_search() ) :

			$targetid = get_ID_by_slug($slug);

			$ancestors = get_post_ancestors($post->ID);

			if (in_array($targetid, $ancestors)) return true;

	endif;

}


function get_ID_by_slug($page_slug) {
	// Not happy about calling the DB, but get_page_by_path() just wasn't cutting it.

	global $wpdb;

	$page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE ( post_name = '".$page_slug."' or post_title = '".$page_slug."' ) and post_status = 'publish' and post_type='page' ");
	return $page_id;

}


function wpb_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }
}
add_action( 'template_redirect', 'wpb_change_search_url' );
