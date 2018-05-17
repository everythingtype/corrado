<?php

// Sidebars
// http://justintadlock.com/archives/2010/11/08/sidebars-in-wordpress

// Menus
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'top-main', __( 'Top: Main Menu' ) );
	register_nav_menu( 'top-sub', __( 'Top: Sub Menu' ) );
}


?>
