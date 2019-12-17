<?php
/**
 * Main file for plugin.
 *
 * @since 0.1.0
 *
 * @package Spaces_Media_Collection_Post_Type
 */

namespace Spaces\Spaces_Media_Collection;

/**
 * Bootstrap the plugin.
 *
 * @since 0.1.0
 */
function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\register', 10 );
	add_action( 'init', __NAMESPACE__ . '\register_block_template', 11 );
}

/**
 * Register custom post type
 *
 * @since 0.1.0
 */
function register() {

	$labels  = array(
		'name'                  => _x( 'Collections', 'Post Type General Name', 'spaces-media-collection-post-type' ),
		'singular_name'         => _x( 'Collection', 'Post Type Singular Name', 'spaces-media-collection-post-type' ),
		'menu_name'             => __( 'Collections', 'spaces-media-collection-post-type' ),
		'name_admin_bar'        => __( 'Collection', 'spaces-media-collection-post-type' ),
		'archives'              => __( 'Collection Archives', 'spaces-media-collection-post-type' ),
		'attributes'            => __( 'Collection Attributes', 'spaces-media-collection-post-type' ),
		'parent_item_colon'     => __( 'Parent collection:', 'spaces-media-collection-post-type' ),
		'all_items'             => __( 'All Collections', 'spaces-media-collection-post-type' ),
		'add_new_item'          => __( 'Add New Collection', 'spaces-media-collection-post-type' ),
		'add_new'               => __( 'Add New', 'spaces-media-collection-post-type' ),
		'new_item'              => __( 'New Collection', 'spaces-media-collection-post-type' ),
		'edit_item'             => __( 'Edit Collection', 'spaces-media-collection-post-type' ),
		'update_item'           => __( 'Update Collection', 'spaces-media-collection-post-type' ),
		'view_item'             => __( 'View Collection', 'spaces-media-collection-post-type' ),
		'view_items'            => __( 'View Collections', 'spaces-media-collection-post-type' ),
		'search_items'          => __( 'Search Collections', 'spaces-media-collection-post-type' ),
		'not_found'             => __( 'Not found', 'spaces-media-collection-post-type' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'spaces-media-collection-post-type' ),
		'featured_image'        => __( 'Featured Image', 'spaces-media-collection-post-type' ),
		'set_featured_image'    => __( 'Set featured image', 'spaces-media-collection-post-type' ),
		'remove_featured_image' => __( 'Remove featured image', 'spaces-media-collection-post-type' ),
		'use_featured_image'    => __( 'Use as featured image', 'spaces-media-collection-post-type' ),
		'insert_into_item'      => __( 'Insert into collection', 'spaces-media-collection-post-type' ),
		'uploaded_to_this_item' => __( 'Uploaded to this collection', 'spaces-media-collection-post-type' ),
		'items_list'            => __( 'Collections list', 'spaces-media-collection-post-type' ),
		'items_list_navigation' => __( 'Collections list navigation', 'spaces-media-collection-post-type' ),
		'filter_items_list'     => __( 'Filter collections list', 'spaces-media-collection-post-type' ),
	);
	$rewrite = array(
		'slug'       => 'collection',
		'with_front' => true,
		'pages'      => true,
		'feeds'      => true,
	);
	$args    = array(
		'label'               => __( 'Collection', 'spaces-media-collection-post-type' ),
		'description'         => __( 'Collection of media posts in Spaces.', 'spaces-media-collection-post-type' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt2',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'collection',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'rest_base'           => 'collections',
	);
	register_post_type( 'media_collection', $args );

}

/**
 * Post type block template.
 *
 * @since 0.1.0
 */
function register_block_template() {
	$post_type           = get_post_type_object( 'media_collection' );
	$post_type->template = array(
		array(
			'core/paragraph',
			array(
				'backgroundColor' => 'vivid-red',
				'content'          => '<p>' . __( 'Delete me!!!', 'spaces-media-collection-post-type' ) . '</p><p><img src="' . plugin_dir_url( __DIR__ ) . '/assets/save-hash.gif" /></p>',
			),
		),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'level'       => 2,
						'placeholder' => __( 'Title of this item or items', 'spaces-media-collection-post-type' ),
					),
				),
				array( 'core/paragraph', array( 'placeholder' => __( 'Describe the item in your collection', 'spaces-media-collection-post-type' ) ) ),
				array( 'core-embed/wordpress' ),
			),
		),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'level'       => 2,
						'placeholder' => __( 'Title of this item or items', 'spaces-media-collection-post-type' ),
					),
				),
				array( 'core/paragraph', array( 'placeholder' => __( 'Describe the item in your collection', 'spaces-media-collection-post-type' ) ) ),
				array( 'core-embed/wordpress' ),
			),
		),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'level'       => 2,
						'placeholder' => __( 'Title of this item or items', 'spaces-media-collection-post-type' ),
					),
				),
				array( 'core/paragraph', array( 'placeholder' => __( 'Describe the item in your collection', 'spaces-media-collection-post-type' ) ) ),
				array( 'core-embed/wordpress' ),
			),
		),
	);
}
