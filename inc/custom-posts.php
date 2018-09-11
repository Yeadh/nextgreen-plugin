<?php

if ( ! function_exists('nextgreen_custom_post_type') ) {
	

/**
 * Register a custom post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function nextgreen_custom_post_type() {
    //Services
    register_post_type(
        'service', array(
        'labels'                 => array(
            'name'               => _x( 'Services', 'post type general name', 'nextgreen' ),
            'singular_name'      => _x( 'Service', 'post type singular name', 'nextgreen' ),
            'menu_name'          => _x( 'Services', 'admin menu', 'nextgreen' ),
            'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'nextgreen' ),
            'add_new'            => _x( 'Add New', 'service', 'nextgreen' ),
            'add_new_item'       => __( 'Add New Service', 'nextgreen' ),
            'new_item'           => __( 'New Service', 'nextgreen' ),
            'edit_item'          => __( 'Edit Service', 'nextgreen' ),
            'view_item'          => __( 'View Service', 'nextgreen' ),
            'all_items'          => __( 'All Services', 'nextgreen' ),
            'search_items'       => __( 'Search Services', 'nextgreen' ),
            'parent_item_colon'  => __( 'Parent Services:', 'nextgreen' ),
            'not_found'          => __( 'No Services found.', 'nextgreen' ),
            'not_found_in_trash' => __( 'No Services found in Trash.', 'nextgreen' )
        ),

        'description'        => __( 'Description.', 'nextgreen' ),
        'menu_icon'          => 'dashicons-welcome-write-blog',
        'public'             => true,
        'show_in_menu'       => true,
        'has_archive'        => false,
        'hierarchical'       => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    ));

    //Team
    register_post_type(
        'team', array(
        'labels'                 => array(
            'name'               => _x( 'Team', 'post type general name', 'nextgreen' ),
            'singular_name'      => _x( 'Team', 'post type singular name', 'nextgreen' ),
            'menu_name'          => _x( 'Team', 'admin menu', 'nextgreen' ),
            'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'nextgreen' ),
            'add_new'            => _x( 'Add New', 'team', 'nextgreen' ),
            'add_new_item'       => __( 'Add New Team', 'nextgreen' ),
            'new_item'           => __( 'New Team', 'nextgreen' ),
            'edit_item'          => __( 'Edit Team', 'nextgreen' ),
            'view_item'          => __( 'View Team', 'nextgreen' ),
            'all_items'          => __( 'All Team', 'nextgreen' ),
            'search_items'       => __( 'Search Team', 'nextgreen' ),
            'parent_item_colon'  => __( 'Parent Team:', 'nextgreen' ),
            'not_found'          => __( 'No Team found.', 'nextgreen' ),
            'not_found_in_trash' => __( 'No Team found in Trash.', 'nextgreen' )
        ),

        'description'        => __( 'Description.', 'nextgreen' ),
        'menu_icon'          => 'dashicons-groups',
        'public'             => true,
        'show_in_menu'       => true,
        'has_archive'        => false,
        'hierarchical'       => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'supports'           => array( 'title', 'excerpt', 'thumbnail' )
    ));

    //Gallery
    register_post_type(
        'gallery', array(
        'labels'                 => array(
            'name'               => _x( 'Gallery', 'post type general name', 'nextgreen' ),
            'singular_name'      => _x( 'Gallery', 'post type singular name', 'nextgreen' ),
            'menu_name'          => _x( 'Gallery', 'admin menu', 'nextgreen' ),
            'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar', 'nextgreen' ),
            'add_new'            => _x( 'Add New', 'Gallery', 'nextgreen' ),
            'add_new_item'       => __( 'Add New Gallery', 'nextgreen' ),
            'new_item'           => __( 'New Gallery', 'nextgreen' ),
            'edit_item'          => __( 'Edit Gallery', 'nextgreen' ),
            'view_item'          => __( 'View Gallery', 'nextgreen' ),
            'all_items'          => __( 'All Gallery', 'nextgreen' ),
            'search_items'       => __( 'Search Gallery', 'nextgreen' ),
            'parent_item_colon'  => __( 'Parent Gallery:', 'nextgreen' ),
            'not_found'          => __( 'No Gallery found.', 'nextgreen' ),
            'not_found_in_trash' => __( 'No Gallery found in Trash.', 'nextgreen' )
        ),

        'description'        => __( 'Description.', 'nextgreen' ),
        'menu_icon'          => 'dashicons-layout',
        'public'             => true,
        'show_in_menu'       => true,
        'has_archive'        => false,
        'hierarchical'       => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'supports'           => array( 'title', 'thumbnail' )
    ));

    // Gallery taxonomy
    register_taxonomy(
        'gallery_category',
        'gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery Category', 'nextgreen' ),
                'add_new_item'      => __( 'Add New Category', 'nextgreen' ),
            ),
            'hierarchical' => true,
            'show_admin_column'     => true
    ));
}

add_action( 'init', 'nextgreen_custom_post_type' );

}