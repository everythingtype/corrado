<?php

// Register Custom Post Type
function create_corrado_tips() {

	$labels = array(
		'name'                  => 'Tips',
		'singular_name'         => 'Tip',
		'menu_name'             => 'Tips',
		'name_admin_bar'        => 'Tips',
		'archives'              => 'Tip Archives',
		'attributes'            => 'Tip Attributes',
		'parent_item_colon'     => 'Parent Tip',
		'all_items'             => 'All Tips',
		'add_new_item'          => 'Add New Tip',
		'add_new'               => 'Add New',
		'new_item'              => 'New Tip',
		'edit_item'             => 'Edit Tip',
		'update_item'           => 'Update Tip',
		'view_item'             => 'View Tip',
		'view_items'            => 'View Tips',
		'search_items'          => 'Search Tip',
		'not_found'             => 'No tips found',
		'not_found_in_trash'    => 'No tips found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into tip',
		'uploaded_to_this_item' => 'Uploaded to this tip',
		'items_list'            => 'Tips list',
		'items_list_navigation' => 'Tips list navigation',
		'filter_items_list'     => 'Filter tips list',
	);
	$args = array(
		'label'                 => 'Tip',
		'labels'                => $labels,
		'supports'              => array( 'title','editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-lightbulb',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'corrado_tips', $args );

}
add_action( 'init', 'create_corrado_tips', 0 );
