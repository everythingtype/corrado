<?php

require_once( 'functions/enqueue.php' );
require_once( 'functions/media.php' );
require_once( 'functions/spellerberg_wpsrcset.php' );


function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
