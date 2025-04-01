<?php
/**
 * Plugin Name: Be API Blocks Theme - Custom Post Types
 * Description: Custom post types for the BeAPI Blocks Theme. For local development only.
 * Version: 1.0.0
 */

namespace BEAPI\BeapiBlocksThemeCustomPostTypes;

/**
 * Create the press release post type
 */
function create_press_release_post_type() {
	$post_type = 'press-release';

	register_post_type(
		$post_type,
		[
			'labels'       => [
				'name'                     => 'Press releases',
				'singular_name'            => 'Press release',
				'menu_name'                => 'Press releases',
				'all_items'                => 'All press releases',
				'edit_item'                => 'Edit press release',
				'view_item'                => 'View press release',
				'view_items'               => 'View press releases',
				'add_new_item'             => 'Add new press release',
				'add_new'                  => 'Add new press release',
				'new_item'                 => 'New press release',
				'parent_item_colon'        => 'Parent press release:',
				'search_items'             => 'Search press releases',
				'not_found'                => 'No press releases found',
				'not_found_in_trash'       => 'No press releases found in trash',
				'archives'                 => 'Press release archives',
				'attributes'               => 'Press release attributes',
				'insert_into_item'         => 'Insert into press release',
				'uploaded_to_this_item'    => 'Uploaded to this press release',
				'filter_items_list'        => 'Filter press releases list',
				'filter_by_date'           => 'Filter press releases by date',
				'items_list_navigation'    => 'Press releases list navigation',
				'items_list'               => 'Press releases list',
				'item_published'           => 'Press release published.',
				'item_published_privately' => 'Press release published privately.',
				'item_reverted_to_draft'   => 'Press release reverted to draft.',
				'item_scheduled'           => 'Press release scheduled.',
				'item_updated'             => 'Press release updated.',
				'item_link'                => 'Press release link',
				'item_link_description'    => 'A link to a press release.',
			],
			'public'       => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-megaphone',
			'supports'     => [
				'title',
				'author',
				'editor',
				'thumbnail',
				'excerpt',
			],
			'taxonomies'   => [ 'category', 'post_tag' ],
			'rewrite'      => [
				'with_front' => false,
				'slug'       => 'press-releases',
			],
			'has_archive'  => true,
		]
	);
}

/**
 * Create the job offer post type
 */
function create_job_offer_post_type() {
	$post_type           = 'job-offer';
	$tax_contract_type   = 'contract-type';
	$tax_seniority_level = 'seniority-level';
	$tax_location        = 'location';

	register_taxonomy(
		$tax_contract_type,
		$post_type,
		[
			'labels'             => [
				'name'                  => 'Contract types',
				'singular_name'         => 'Contract type',
				'menu_name'             => 'Contract types',
				'all_items'             => 'All contract types',
				'edit_item'             => 'Edit contract type',
				'view_item'             => 'View contract type',
				'update_item'           => 'Update contract type',
				'add_new_item'          => 'Add new contract type',
				'new_item_name'         => 'New contract type',
				'parent_item'           => 'Contract type parent',
				'parent_item_colon'     => 'Contract type parent:',
				'search_items'          => 'Search contract types',
				'not_found'             => 'No contract types found',
				'no_terms'              => 'No contract types',
				'filter_by_item'        => 'Filter by contract type',
				'items_list_navigation' => 'Contract types list navigation',
				'items_list'            => 'Contract types list',
				'back_to_items'         => '← Back to contract types',
				'item_link'             => 'Contract type link',
				'item_link_description' => 'A link to a contract type',
			],
			'public'             => true,
			'publicly_queryable' => true,
			'hierarchical'       => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'rewrite'            => false,
			'show_admin_column'  => true,
			'show_in_quick_edit' => true,
			'show_in_rest'       => true,
		],
	);

	register_taxonomy(
		$tax_seniority_level,
		$post_type,
		[
			'labels'             => [
				'name'                  => 'Seniority levels',
				'singular_name'         => 'Seniority level',
				'menu_name'             => 'Seniority levels',
				'all_items'             => 'All seniority levels',
				'edit_item'             => 'Edit seniority level',
				'view_item'             => 'View seniority level',
				'update_item'           => 'Update seniority level',
				'add_new_item'          => 'Add new seniority level',
				'new_item_name'         => 'New seniority level',
				'parent_item'           => 'Seniority level parent',
				'parent_item_colon'     => 'Seniority level parent:',
				'search_items'          => 'Search seniority levels',
				'not_found'             => 'No seniority levels found',
				'no_terms'              => 'No seniority levels',
				'filter_by_item'        => 'Filter by seniority level',
				'items_list_navigation' => 'Seniority levels list navigation',
				'items_list'            => 'Seniority levels list',
				'back_to_items'         => '← Back to seniority levels',
				'item_link'             => 'Seniority level link',
				'item_link_description' => 'A link to a seniority level',
			],
			'public'             => true,
			'publicly_queryable' => true,
			'hierarchical'       => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'rewrite'            => false,
			'show_admin_column'  => true,
			'show_in_quick_edit' => true,
			'show_in_rest'       => true,
		],
	);

	register_taxonomy(
		$tax_location,
		$post_type,
		[
			'labels'             => [
				'name'                  => 'Locations',
				'singular_name'         => 'Location',
				'menu_name'             => 'Locations',
				'all_items'             => 'All locations',
				'edit_item'             => 'Edit location',
				'view_item'             => 'View location',
				'update_item'           => 'Update location',
				'add_new_item'          => 'Add new location',
				'new_item_name'         => 'New location',
				'parent_item'           => 'Parent location',
				'parent_item_colon'     => 'Parent location:',
				'search_items'          => 'Search locations',
				'not_found'             => 'No locations found',
				'no_terms'              => 'No locations',
				'filter_by_item'        => 'Filter by location',
				'items_list_navigation' => 'Locations list navigation',
				'items_list'            => 'Locations list',
				'back_to_items'         => '← Back to locations',
				'item_link'             => 'Location link',
				'item_link_description' => 'A link to a location',
			],
			'public'             => true,
			'publicly_queryable' => true,
			'hierarchical'       => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'rewrite'            => false,
			'show_admin_column'  => true,
			'show_in_quick_edit' => true,
			'show_in_rest'       => true,
		],
	);

	register_post_type(
		$post_type,
		[
			'labels'       => [
				'name'                     => 'Job offers',
				'singular_name'            => 'Job offer',
				'menu_name'                => 'Job offers',
				'all_items'                => 'All job offers',
				'edit_item'                => 'Edit job offer',
				'view_item'                => 'View job offer',
				'view_items'               => 'View job offers',
				'add_new_item'             => 'Add new job offer',
				'add_new'                  => 'Add new job offer',
				'new_item'                 => 'New job offer',
				'parent_item_colon'        => 'Parent job offer:',
				'search_items'             => 'Search job offers',
				'not_found'                => 'No job offers found',
				'not_found_in_trash'       => 'No job offers found in trash',
				'archives'                 => 'Job offer archives',
				'attributes'               => 'Job offer attributes',
				'insert_into_item'         => 'Insert into job offer',
				'uploaded_to_this_item'    => 'Uploaded to this job offer',
				'filter_items_list'        => 'Filter job offers list',
				'filter_by_date'           => 'Filter job offers by date',
				'items_list_navigation'    => 'Job offers list navigation',
				'items_list'               => 'Job offers list',
				'item_published'           => 'Job offer published.',
				'item_published_privately' => 'Job offer published privately.',
				'item_reverted_to_draft'   => 'Job offer reverted to draft.',
				'item_scheduled'           => 'Job offer scheduled.',
				'item_updated'             => 'Job offer updated.',
				'item_link'                => 'Job offer link',
				'item_link_description'    => 'A link to a job offer.',
			],
			'public'       => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-hammer',
			'supports'     => [
				'title',
				'author',
				'editor',
				'thumbnail',
				'excerpt',
			],
			'taxonomies'   => [ $tax_contract_type, $tax_seniority_level, $tax_location ],
			'rewrite'      => [
				'with_front' => false,
				'slug'       => 'job-offers',
			],
			'has_archive'  => true,
		]
	);
}

/**
 * Create the publication post type
 */
function create_publication_post_type() {
	$post_type = 'publication';

	register_post_type(
		$post_type,
		[
			'labels'       => [
				'name'                     => 'Publications',
				'singular_name'            => 'Publication',
				'menu_name'                => 'Publications',
				'all_items'                => 'All publications',
				'edit_item'                => 'Edit publication',
				'view_item'                => 'View publication',
				'view_items'               => 'View publications',
				'add_new_item'             => 'Add new publication',
				'add_new'                  => 'Add new publication',
				'new_item'                 => 'New publication',
				'parent_item_colon'        => 'Parent publication:',
				'search_items'             => 'Search publications',
				'not_found'                => 'No publications found',
				'not_found_in_trash'       => 'No publications found in trash',
				'archives'                 => 'Publication archives',
				'attributes'               => 'Publication attributes',
				'insert_into_item'         => 'Insert into publication',
				'uploaded_to_this_item'    => 'Uploaded to this publication',
				'filter_items_list'        => 'Filter publications list',
				'filter_by_date'           => 'Filter publications by date',
				'items_list_navigation'    => 'Publications list navigation',
				'items_list'               => 'Publications list',
				'item_published'           => 'Publication published.',
				'item_published_privately' => 'Publication published privately.',
				'item_reverted_to_draft'   => 'Publication reverted to draft.',
				'item_scheduled'           => 'Publication scheduled.',
				'item_updated'             => 'Publication updated.',
				'item_link'                => 'Publication link',
				'item_link_description'    => 'A link to a publication.',
			],
			'public'       => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-book',
			'supports'     => [
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			],
			'taxonomies'   => [ 'category', 'post_tag' ],
			'rewrite'      => [
				'with_front' => false,
				'slug'       => 'publications',
			],
			'has_archive'  => true,
		]
	);
}

/**
 * Initialize the custom post types
 */
function init() {
	create_press_release_post_type();
	create_job_offer_post_type();
	create_publication_post_type();
}

add_action( 'init', __NAMESPACE__ . '\init' );
