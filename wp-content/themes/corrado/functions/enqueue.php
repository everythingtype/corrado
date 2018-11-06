<?php

function enqueue_scripts_method() {

	$version = "c";

	// Remove Unnecessary Code
	// http://www.themelab.com/2010/07/11/remove-code-wordpress-header/

	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');

	// Define JS

	$layoutjs = get_template_directory_uri() . '/js/layout.js';
	wp_register_script('layoutjs',$layoutjs, false, $version);

	$fadesjs = get_template_directory_uri() . '/js/fades.js';
	wp_register_script('fadesjs',$fadesjs, false, $version);

	$googlemapsjs = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC8teDzhlJqlbwAjvI3ri82kPpXXBiKXrM';
	wp_register_script('googlemapsjs',$googlemapsjs, false);

	$mapjs = get_template_directory_uri() . '/js/map.js';
	wp_register_script('mapjs',$mapjs, false, $version);

	$flickityjs = get_template_directory_uri() . '/js/flickity.pkgd.min.js';
	wp_register_script('flickityjs',$flickityjs, false, $version);

	// Define CSS

	$typothequecss = 'https://fonts.typotheque.com/WF-030602-010148.css';
	wp_register_style('typothequecss',$typothequecss, false);

	$typotheque2css = 'https://fonts.typotheque.com/WF-030602-010410.css'; // Small Caps
	wp_register_style('typotheque2css',$typotheque2css, false);

	$fontscss = get_stylesheet_directory_uri() . '/fonts/fonts.css';
	wp_register_style('fontscss',$fontscss, false, $version);

	$themecss = get_stylesheet_directory_uri() . '/style.css';
	wp_register_style('themecss',$themecss, false, $version);

	// Enqueue

	if(!wp_script_is('jquery')) wp_enqueue_script("jquery");

	wp_enqueue_script( 'flickityjs');
	wp_enqueue_script( 'layoutjs',array('jquery','flickityjs'));
	wp_enqueue_script( 'fadesjs',array('jquery'));

	wp_enqueue_style( 'typothequecss');
	wp_enqueue_style( 'typotheque2css'); // Small Caps
	wp_enqueue_style( 'fontscss');
	wp_enqueue_style( 'themecss');

	if ( is_page_template('page-contact.php') ) :
		wp_enqueue_script( 'googlemapsjs');
		wp_enqueue_script( 'mapjs');
	endif;

}

add_action('wp_enqueue_scripts', 'enqueue_scripts_method');
