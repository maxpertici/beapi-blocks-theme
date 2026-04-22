<?php

namespace BEA\Theme\Framework\Services;

use BEA\Theme\Framework\Service;
use BEA\Theme\Framework\Service_Container;

/**
 * Class Search
 *
 * @package BEA\Theme\Framework\Search
 */
class Search implements Service {

	/**
	 * Register the service
	 *
	 * @param Service_Container $container The service container.
	 */
	public function register( Service_Container $container ): void {}

	/**
	 * Boot the service
	 *
	 * @param Service_Container $container The service container.
	 */
	public function boot( Service_Container $container ): void {
		$this->extend_search();
	}

	/**
	 * Get the service name
	 *
	 * @return string The service name.
	 */
	public function get_service_name(): string {
		return 'search';
	}

	/**
	 * Extend the search to include custom post types
	 */
	public function extend_search(): void {
		/**
		 * Extend the search to include custom post types
		 */
		add_filter( 'pre_get_posts', [ $this, 'extend_search_to_custom_post_types' ] );
	}

	/**
	 * Extend the search to include custom post types
	 *
	 * @param \WP_Query $query The query object.
	 */
	public function extend_search_to_custom_post_types( \WP_Query $query ): void {
		if ( ! $query->is_main_query() && ! $query->is_search() ) {
			return;
		}

		$post_types = apply_filters(
			'bea_theme_search_post_types',
			[
				'post',
				'page',
			]
		);

		$query->set( 'post_type', $post_types );
	}
}
