<?php
/**
 * Custom post type for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package True_Style
 */

function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'ts' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'ts' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'ts' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'ts' ),
        'add_new'               => __( 'Add New', 'ts' ),
        'add_new_item'          => __( 'Add New recipe', 'ts' ),
        'new_item'              => __( 'New recipe', 'ts' ),
        'edit_item'             => __( 'Edit recipe', 'ts' ),
        'view_item'             => __( 'View recipe', 'ts' ),
        'all_items'             => __( 'All recipes', 'ts' ),
        'search_items'          => __( 'Search recipes', 'ts' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'ts' ),
        'not_found'             => __( 'No recipes found.', 'ts' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'ts' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ts' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ts' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ts' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ts' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ts' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ts' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ts' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ts' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ts' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ts' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    
    register_post_type( 'Recipe', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );
