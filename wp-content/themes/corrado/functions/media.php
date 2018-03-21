<?php

// Sets of sizes appropriate for srcset

// // Warhol images can not be larger than 475px on longest side
// add_image_size( 'art', 475, 475, false );
// 
// // Installation images can not be larger than 1000px on longest side
// add_image_size( 'installation-tiny', 320, 1000, false );
// add_image_size( 'installation-small', 600, 1000, false );
// add_image_size( 'installation', 1000, 1000, false );
// 
// // Other images have no restrictions
// add_image_size( 'unrestricted-tiny', 320, 1000, false );
// add_image_size( 'unrestricted-small', 600, 1200, false );
// add_image_size( 'unrestricted-medium', 900, 2700, false );
// add_image_size( 'unrestricted-large', 1200, 3600, false );
// add_image_size( 'unrestricted', 1800, 5400, false );
// 
// // Call to actions use square images
// add_image_size( 'square-small', 320, 320, array('center','center') );
// add_image_size( 'square-medium', 600, 600, array('center','center') );
// add_image_size( 'square-large', 900, 900, array('center','center') );
// add_image_size( 'square', 1000, 1000, array('center','center') );

function spellerberg_this_sites_sizesets() {

	$sets = Array();
	// $sets[] = Array('art');
	// $sets[] = Array('installation-tiny','installation-small','installation');
	// $sets[] = Array('unrestricted-tiny','unrestricted-small','unrestricted-medium','unrestricted-large','unrestricted');
	// $sets[] = Array('square-small','square-medium','square-large','square');
	$sets[] = Array('thumbnail','medium','large','full'); // WordPress Default Sizes

	return $sets;
}

//http://speakinginbytes.com/2012/11/responsive-images-in-wordpress/
//add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
add_filter( 'acf_the_content', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
